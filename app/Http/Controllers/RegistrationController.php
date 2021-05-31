<?php

namespace App\Http\Controllers;

use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Registration;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Tradde;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\Models\Ident_image;
use Twilio\Exceptions\TwilioException;
class RegistrationController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if (Auth::check()) {
          $id = Auth::id();
          $usr= User::where('id', $id)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
        }
        else {
          $usernameEnd='';
          $logged_in=0;
        }
         
        return view('registration.registration');
    }
    public function login()
    {
        if (Auth::check()) {
          $id = Auth::id();
          $usr= User::where('id', $id)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
        }
        else {
          $usernameEnd='';
          $logged_in=0;
        }
        return view('registration.login');
    }
    public function twosteplogin($email){
      $usr= User::where('email', $email)->first();
      $usernameEnd="";
      $recipients=$usr->phone;
      $verification_code = rand(100000,999999);
      $usr->verification_code=$verification_code;
      $usr->save();
      /*$phone = '+16592047115';
      $message=$verification_code. ' is the verification code for your phone number in Index Ladder!';
      $twilio = new Client($account_sid, $auth_token);
      try {
          $twilio->messages->create($recipients, [
            'from' => $phone,
            'body' => $message
          ] );
          $logged_in=0;
          return view('registration.twostep', ['emailValue' => $email]);
      } catch (TwilioException $e) {
        return response()->json(['success'=>$e->getCode()]);
        //die( $e->getCode() . ' : ' . $e->getMessage() );
      }*/
      $data= array('username' => $usr->name,
                   'email' => $usr->email, 
                   'code' => $verification_code);          
      Mail::send('mails.code',$data,function($message) use ($data){
        $message->to($data['email'],$data['username'])->subject('Your 6 digits code');
      });
      return view('registration.twostep', ['emailValue' => $email]);      
      $logged_in=0;
    }    
  
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
          $regis = Registration::create([
                    'password' => Hash::make($request->password),
                    'email' => $request->email,
                    'token' => $request->csrfToken
                ]);
          $regis->save();
          $usr= User::create([
            'name' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role_id' => 2,
            'remember_token'=> $request->csrfToken
          ]);
          $usr->save();
          $users=DB::table('users')->where('email', $request->email)->first();
          DB::table('registrations')->where('email', $request->email)->update(['user_id' => $users->id]);
          $data= array('firstname' => $request->username,
                       'email' => $request->email, 
                       'token' => $request->csrfToken, 
                       'link'=> route('verify',[ 'token' => $request->csrfToken, 'email' => $request->email ])); 
            Mail::send('mails.mail',$data,function($message) use ($data){
              $message->to($data['email'],$data['firstname'])->subject('Confirm your email and get started');
            });
            return ['redirect' => route('home')];
    }
    public function SendContact(Request $request){
      $email=$request->email;
      $contact=$request->contact;
      DB::table('contacts')->insert(['email' => $email, 'message' => $contact]);
      $success='Success';
      return response()->json(['success' => $success]);
    }
    public function GetAllContacts(){
      $contacts = DB::table('contacts')->get();
      return response()->json($contacts);
    }    
    public function GetRegistrations(){
      $registrations = DB::table('registrations')->get();
      return response()->json($registrations);
    }
    public function GetAllUsers(){
      $users = DB::table('users')->get();
      return response()->json($users);
    }    
    public function CheckEmailExist($email){
      $success="";
      $usr=User::where('email', $email)->first();
      if(!empty($usr->email)){
        $success='Success';
      }
      else {
        $success='Fail';
      }
      return response()->json(['success' => $success]);
    }
    public function SendSMS($message,$recipients){
      $account_sid = config('services.twilio')['account_sid'];
      $auth_token = config('services.twilio')['auth_token'];
      $phone = '+16592047115';
      $message=$verification_code. ' is the verification code for your phone number in Index Ladder!';
      $twilio = new Client($account_sid, $auth_token);
      try {
          $twilio->messages->create($recipients, [
            'from' => $phone,
            'body' => $message
          ] );
          $logged_in=0;
          return view('registration.twostep', ['emailValue' => $email]);
      } catch (TwilioException $e) {
        return response()->json(['success'=>$e->getCode()]);
        //die( $e->getCode() . ' : ' . $e->getMessage() );
      }
    }     
    public function verify($token,$email)
    {
      $reg=Registration::where('token', $token)->where('email', $email)->first();
      if(!empty($reg->email)){
        $usr= User::where('email', $email)->first();
        $usr->email_verified_at=Carbon::now();
        $usr->save();
        $URL= route('welcome').'/images/UserDefaultAvatar.png' ;
        $file_name = 'UserDefaultAvatar.png';
        $file_type = 'png';
        $file_size = '9999';
        $img = Ident_image::create([
                'image_url' => $URL ,
                'name' => $file_name,
                'type' => $file_type,
                'size' => $file_size,
                'user_id' => $usr->id,
                'ident_type' => 4 
                ]);
        $img->save();
        return redirect()->route('login-user')->with('message', 'Thank you. Now you can login in Index Ladder Site');
      }
    }
    public function privacy()
    {
        if (Auth::check()) {
          $id = Auth::id();
          $usr= User::where('id', $id)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
        }
        else {
          $usernameEnd='';
          $logged_in=0;
        }
        
        return view('content.privacy');        
    }    
    public function how()
    {
        if (Auth::check()) {
          $id = Auth::id();
          $usr= User::where('id', $id)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
        }
        else {
          $usernameEnd='';
          $logged_in=0;
        }
      
        return view('content.how');        
    }
    public function getUserName(){
      $username="";
      $loggedin=0;
      if (Auth::check()) {
        $id = Auth::id();
        $usr= User::where('id', $id)->first();
        $username=$usr->name;
        $loggedin=1;
      }
      return response()->json(['name' => $username, 'logg' => $loggedin]);
    }
    public function faq()
    {    
        return view('content.faq');        
    }
    public function recover(){
      return view('registration.recover'); 
    }
    public function SendRecoverPassEmail($email){
      $usr= User::where('email', $email)->first();
      if(!empty($usr)){
        $data= array('name' => $usr->name, 
                     'email' => $usr->email, 
                     'token' => $usr->token, 
                     'link'=> route('ChangePassEmail',[ 'email' => $email ]));         
        Mail::send('mails.recover',$data,function($message) use ($data){
          $message->to($data['email'],$data['name'])->subject('Confirm your email to revover password');
        });         
        $success="Success";
      }
      else {
        $success="Fail";
      }      
      return response()->json(['success' => $success]); 
    }
    public function ChangePassEmail($email){
      return view('registration.change',['emailValue' => $email]); 
    }
    public function changepassword(Request $request){
      $usr= User::where('email', $request->email)->first();
      if(!empty($usr)){
        $usr->password=Hash::make($request->password);
        $usr->save();
        return ['redirect' => route('login-user')];
      }
    }
    public function setnumber(){
        if (Auth::check()) {
          $iduser = Auth::id();
          $usr= User::where('id', $iduser)->first();
          if(!empty($usr->phone)){
            return redirect()->route('welcome');
          }
          else {
            return view('profile.phone_number');
          }
        }
        else {
          return redirect()->route('login-user');
        }        
    }
    public function phonenumber(Request $request){
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $regis= Registration::where('user_id', $iduser)->first();
      $regis->phone=$usr->phone;
      $regis->save();
      $usernameEnd="";
      $recipients=$request->phone;
      $verification_code = rand(100000,999999);
      $usr->verification_code=$verification_code;
      $usr->phone=$request->phone;
      $usr->save();
      $account_sid = config('services.twilio')['account_sid'];
      $auth_token = config('services.twilio')['auth_token'];
      $phone = '+16592047115';
      $message=$verification_code. ' is the verification code for your phone number in Index Ladder!';
      $twilio = new Client($account_sid, $auth_token);
      try {
          $twilio->messages->create($recipients, [
            'from' => $phone,
            'body' => $message
          ] );
          $logged_in=0;
          return response()->json(['success'=>'Success']);
      } catch (TwilioException $e) {
        return response()->json(['success'=>$e->getCode()]);
        //die( $e->getCode() . ' : ' . $e->getMessage() );
      }      

        //21408
    }
    public function verify_phone(){
      return view('profile.verify_number');
    }
    public function topfourServ(){
            $se = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->select('products.id as id',
                     'products.category_id as category_id',
                     'products.name as name',
                     'products.description as description',
                     'products.type_id as type_id',
                     'products.amount as amount',
                     'products.user_id as user_id',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',1329)->where('traddes.status','=',1)
            ->orderBy('products.id','asc')
            ->limit(4)->get();
            return response()->json($se);
    }
    public function topfourSki(){
            $se = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->select('products.id as id',
                     'products.category_id as category_id',
                     'products.name as name',
                     'products.description as description',
                     'products.type_id as type_id',
                     'products.amount as amount',
                     'products.user_id as user_id',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',1330)->where('traddes.status','=',1)
            ->orderBy('products.id','asc')
            ->limit(4)->get();
            return response()->json($se);
    }
    public function topfourPro(){
            $se = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->select('products.id as id',
                     'products.category_id as category_id',
                     'products.name as name',
                     'products.description as description',
                     'products.type_id as type_id',
                     'products.amount as amount',
                     'products.user_id as user_id',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',1331)->where('traddes.status','=',1)
            ->orderBy('products.id','asc')
            ->limit(4)->get();
            return response()->json($se);
    }
    public function commodities(){
            $se = DB::table('commodities')
            ->join('commodities_images', 'commodities.image_id', '=', 'commodities_images.id')
            ->select('commodities.id as id',
                     'commodities.name as name',
                     'commodities.description as description',
                     'commodities.type_id as type_id',
                     'commodities.amount as amount',
                     'commodities_images.image_url as image_url')
            ->where('commodities.type_id','=',3)->orderBy('commodities.id','asc')->get();
            return response()->json($se);
    }
    public function services(){
            $se = DB::table('commodities')
            ->join('commodities_images', 'commodities.image_id', '=', 'commodities_images.id')
            ->select('commodities.id as id',
                     'commodities.name as name',
                     'commodities.description as description',
                     'commodities.type_id as type_id',
                     'commodities.amount as amount',
                     'commodities_images.image_url as image_url')
            ->where('commodities.type_id','=',1)->orderBy('commodities.id','asc')->get();
            return response()->json($se);
    }
    public function search(){
            $product = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->select('products.id as id',
                     'products.category_id as category_id',
                     'products.name as name',
                     'products.description as description',
                     'products.type_id as type_id',
                     'products.amount as amount',
                     'products.user_id as user_id',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('traddes.status','=',1)
            ->orderBy('products.id','asc')->first();      
            if(empty($product->id)){
              $product = DB::table('commodities')
              ->join('commodities_images', 'commodities.image_id', '=', 'commodities_images.id')
              ->select('commodities.id as id',
                     'commodities.name as name',
                     'commodities.description as description',
                     'commodities.type_id as type_id',
                     'commodities.amount as amount',
                     'commodities_images.image_url as image_url')->orderBy('commodities.id','asc')->paginate(10);              
            }
            else{
              $product = DB::table('products')
              ->join('traddes', 'traddes.product_id', '=', 'products.id')
              ->join('product_images', 'products.image_id', '=', 'product_images.id')
              ->join('categories', 'products.category_id', '=', 'categories.id')
              ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
              ->select('products.id as id',
                     'products.category_id as category_id',
                     'products.name as name',
                     'products.description as description',
                     'products.type_id as type_id',
                     'products.amount as amount',
                     'products.user_id as user_id',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
              ->where('traddes.status','=',1)
              ->orderBy('products.id','asc')->paginate(10);               
            }
            return view('content.gallery',['TradeValues' => json_encode($product)]);
    }
    public function FindByName($search){
          $product = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->select('products.id as id',
                     'products.category_id as category_id',
                     'products.name as name',
                     'products.description as description',
                     'products.type_id as type_id',
                     'traddes.id as tradde_id',
                     'products.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->where('products.name', 'like', '%'.$search.'%')
            ->paginate(10);
            return view('content.gallery',['TradeValues' => json_encode($product)]);
    }
    public function FindByN($search){
        return ['redirect' => route('search.FindByName',['search' => $search])];
    }
    public function matchusers(){
      $TradeValues="";
      return view('content.dashboard',['TradeValues' => $TradeValues]);       
    } 
    public function partnersusers(){
      $TradeValues="";
      return view('content.dashboard',['TradeValues' => $TradeValues]);       
    }        
}
