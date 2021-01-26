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
        return view('registration.twostep', ['emailValue' => $email]);
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
          'email' => 'required|string|email|max:30'
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
                    'email' => $request->email,
                    'token' => $request->csrfToken
                ]);
          $regis->save();
          $usr= User::create([
            'name' => $request->firstname. ' ' . $request->lastname,
            'email' => $request->email,
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
      $usr->phone=$request->phone;
      $usr->save();
      $regis= Registration::where('user_id', $id)->first();
      $regis->phone=$usr->phone;
      $regis->save();
      $usernameEnd="";
      $recipients=$request->phone;
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
        return response()->json(['success'=>'Success']);
    }
    public function verify_phone(){
      return view('profile.verify_number');
    }
}
