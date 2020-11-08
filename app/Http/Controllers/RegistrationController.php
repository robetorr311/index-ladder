<?php

namespace App\Http\Controllers;

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
        $welcomeEndpoint = route('welcome').'|'.$usernameEnd; 
        return view('registration.registration',  ['welcomeEndpoint' => $welcomeEndpoint]);
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
        return view('registration.login', ['welcomeEndpoint' => $welcomeEndpoint, 'logged_in' => $logged_in]);
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
        $welcomeEndpoint = route('welcome').'|'.$usernameEnd . '|'.$logged_in;
        return view('welcome',['welcomeEndpoint' => $welcomeEndpoint, 'ProductsValues' => $pro, 'ServiceValues' => $serv, 'SkillValues' => $ski]); 
    }    
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function show(registration $registration)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function edit(registration $registration)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, registration $registration)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\registration  $registration
     * @return \Illuminate\Http\Response
     */
    public function destroy(registration $registration)
    {
        //
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
        $welcomeEndpoint = route('welcome').'|'.$usernameEnd;
        return view('content.privacy',['welcomeEndpoint' => $welcomeEndpoint, 'logged_in' => $logged_in]);        
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
        $welcomeEndpoint = route('welcome').'|'.$usernameEnd;
        return view('content.how',['welcomeEndpoint' => $welcomeEndpoint, 'logged_in' => $logged_in]);        
    }           
}
