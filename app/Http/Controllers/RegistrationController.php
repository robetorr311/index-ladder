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
        $welcomeEndpoint = route('welcome').'|'.$usernameEnd . '|'.$logged_in;        
        return view('registration.login');
    }
    public function twosteplogin($email){
      $usr= User::where('email', $email)->first();
      $usernameEnd="";
      $recipients=$usr->phone;
      $verification_code = rand(100000,999999);
      $usr->verification_code=$verification_code;
      $usr->save();
      /*$account_sid = config('services.twilio')['account_sid'];
      $auth_token = config('services.twilio')['auth_token'];
      $phone = '+12058909484';
      $message=$verification_code. ' is the verification code for your phone number in Index Ladder!';
      $twilio = new Client($account_sid, $auth_token);
      $twilio->messages->create($recipients, [
            'from' => $phone,
            'body' => $message
        ] );*/
        $logged_in=0;
        $welcomeEndpoint = route('welcome').'|'.$usernameEnd . '|'.$logged_in;        
        return view('registration.twostep', ['emailValue' => $email]);
    }    
    public function welcome(){
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',1)
            ->orderBy('products.id','asc')
            ->limit(4)->get();

        $sk = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->select('products.id as id',
                     'products.category_id as category_id', 
                     'products.name as name',               
                     'products.description as description',
                     'products.type_id as type_id',
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',2)
            ->orderBy('products.id','asc')
            ->limit(4)->get();
        $pr = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->select('products.id as id',
                     'products.category_id as category_id',
                     'products.name as name',               
                     'products.description as description',
                     'products.type_id as type_id',
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',3)
            ->orderBy('products.id','asc')
            ->limit(4)->get();
          if(!empty($se)){ $serv=json_encode($se); } else { $serv="";  } 
          if(!empty($sk)){ $ski=json_encode($sk); } else { $ski="";  } 
          if(!empty($pr)){ $pro=json_encode($pr); } else { $pro="";  } 
        return view('welcome',[ 'ProductsValues' => $pro, 'ServiceValues' => $serv, 'SkillValues' => $ski]); 
    }    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
          'firstname' => 'required|string|max:200',
          'lastname' => 'required|string|max:200',
          'phone' => 'required|string|max:30',
          'email' => 'required|string|email|max:30',
          'address' => 'required|string|max:500'
        ]);
        if ($validator->fails()) {
            $validator->errors()->add('field', 'Something is wrong with this field!');
            return redirect('registration');
        }
        else {
          $regis = Registration::create([
                    'firstname' => $request->firstname,
                    'lastname' => $request->lastname,
                    'password' => Hash::make($request->password),
                    'phone' => $request->phone,
                    'email' => $request->email,
                    'address' => $request->address,
                    'token' => $request->csrfToken
                ]);
          $regis->save();
          $usr= User::create([
            'name' => $request->firstname. ' ' . $request->lastname,
            'email' => $request->email,
            'phone' => $request->phone,
            'password' => Hash::make($request->password),
            'role_id' => 2,
            'remember_token'=> $request->csrfToken
          ]);
          $usr->save();
          $users=DB::table('users')->where('email', $request->email)->first();
          DB::table('registrations')->where('email', $request->email)->update(['user_id' => $users->id]);
          $data= array('firstname' => $request->firstname, 
                       'lastname' => $request->firstname,
                       'email' => $request->email, 
                       'token' => $request->csrfToken, 
                       'link'=> route('verify',[ 'token' => $request->csrfToken, 'email' => $request->email ]));          
          Mail::send('mails.mail',$data,function($message) use ($data){
            $message->to($data['email'],$data['firstname'])->subject('Confirm your email and get started');
          });          
          return ['redirect' => route('home')];
        }
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
        $phone = '+12058909484';
        $twilio = new Client($account_sid, $auth_token);
        $twilio->messages->create($recipients, [
            'from' => $phone,
            'body' => $message
        ] );
    }     
    public function verify($token,$email)
    {
      $reg=Registration::where('token', $token)->where('email', $email)->first();
      if(!empty($reg->email)){
        $usr= User::where('email', $email)->first();
        $usr->email_verified_at=Carbon::now();
        $usr->save();
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
}
