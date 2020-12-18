<?php

namespace App\Http\Controllers;

use App\Models\Profile;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;
use App\Models\Ident_image;
use Twilio\Rest\Client;
use Carbon\Carbon;
class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }    
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
      $TradeValues="";
      return view('content.dashboard',['TradeValues' => $TradeValues]); 
    }
    public function update(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $data=['firstname' => $request->firstname ,'lastname'=> $request->lastname ,'phone'=> $request->phone ,'address' => $request->address ];
      Registration::where('user_id', $id)->update($data);
      $usr->phone=$request->phone;
      $usr->save();
      return ['redirect' => route('profile')];      
    }
    public function UserShow($id){
      $TradeValues="";
      return view('content.dashboard',['TradeValues' => $TradeValues]); 

    }  
    public function SendVerifySMS(){
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $recipients=$usr->phone;
      $verification_code = rand(100000,999999);
      $usr->verification_code=$verification_code;
      $usr->save();
      $account_sid = config('services.twilio')['account_sid'];
      $auth_token = config('services.twilio')['auth_token'];
      $phone = '+12058909484';
      $message=$verification_code. ' is the verification code for your phone number in Index Ladder!';
      $twilio = new Client($account_sid, $auth_token);
      $twilio->messages->create($recipients, [
            'from' => $phone,
            'body' => $message
        ] );
      return view('profile.phone_verification');      
    }
    public function SixDigits(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $generated_code=$usr->verification_code;
      $entered_code=$request->code;
      $success="";
      if($generated_code==$entered_code){
        $success="Success";
        $usr->phone_verified_at=Carbon::now();
        $usr->save();
        $regis= Registration::where('user_id', $id)->first();
        $regis->phone=$usr->phone;
        $regis->save();
      }
      else {
        $success="Fail";
      }
      return response()->json(['success' => $success]);  
    }
    public function EnableTwoStep(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $generated_code=$usr->verification_code;
      $entered_code=$request->code;
      $success="";
      if($generated_code==$entered_code){
        $success="Success";
        $usr->twostep_enabled=true;
        $usr->save();
      }
      else {
        $success="Fail";
      }
      return response()->json(['success' => $success]);  
    }
    public function DeactivateTwoStep(Request $request){
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $generated_code=$usr->verification_code;
      $entered_code=$request->code;
      $success="";
      if($generated_code==$entered_code){
        $success="Success";
        $usr->twostep_enabled=false;
        $usr->save();
      }
      else {
        $success="Fail";
      }
      return response()->json(['success' => $success]);        
    }
    public function SendCode(){
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $recipients=$usr->phone;
      $verification_code = rand(100000,999999);
      $usr->verification_code=$verification_code;
      $usr->save();
      $account_sid = config('services.twilio')['account_sid'];
      $auth_token = config('services.twilio')['auth_token'];
      $phone = '+12058909484';
      $message=$verification_code. ' is the verification code for your phone number in Index Ladder!';
      $twilio = new Client($account_sid, $auth_token);
      $twilio->messages->create($recipients, [
            'from' => $phone,
            'body' => $message
        ] );
      $success="Success";
      return response()->json(['success' => $success]);
    }
    public function IsTwoStepEnaled(){
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $twostep_enabled=$usr->twostep_enabled;
      $success="";
      if($twostep_enabled){
        $success="Success";
      }
      else {
        $success="Fail";
      }
      return response()->json(['success' => $success]);        
    } 
    public function PhoneVerifyed()
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $phone_verified_at=$usr->phone_verified_at;
      $success="";     
      if(!empty($phone_verified_at)){
        $success="Success";
      }
      else {
        $success="Fail";
      }
      return response()->json(['success' => $success]);  
    }
    public function GetUserInfo(){
      $id = Auth::id();
      $user = DB::table('users')->where('id','=',$id)->first(); 
      return response()->json($user);
    }
    public function GetUserAvatar(){
      $id = Auth::id();
      $image = DB::table('ident_images')->where('user_id','=',$id)->where('ident_type','=',4)->first(); 
      return response()->json($image);
    }
    public function GetUserAddress(){
      $id = Auth::id();
      $user = DB::table('registrations')->where('user_id','=',$id)->first(); 
      return response()->json($user);
    }
    public function UrlIdent($type){
      $id = Auth::id();
      $pic=Ident_image::where('user_id', $id)->where('ident_type', $type)->first();
      if(empty($pic)){
        $pic=["id"=>0,"image_url"=>"none","name"=>"none","type"=>"none","size"=>"none","user_id"=>0,"ident_type"=>"0","created_at"=>"none","updated_at"=>"none"];
      }
      return response()->json($pic);
    }
    public function registrationValues(){
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $regis= Registration::where('user_id', $id)->first();
      return response()->json($regis);
    }
}
