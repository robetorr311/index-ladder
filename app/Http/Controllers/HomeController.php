<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Registration;
use App\Models\Ident_image;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (Auth::check()) {
          $id = Auth::id();
          $usr= User::where('id', $id)->first();
          $usernameEnd=$usr->name;
          $logged_in=true;
        }
        else {
          $usernameEnd='';
          $logged_in=false;
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
        return view('home',['welcomeEndpoint' => $welcomeEndpoint, 'logged_in' => $logged_in, 'ProductsValues' => $pro, 'ServiceValues' => $serv, 'SkillValues' => $ski]);        
    }
    public function profile()
    {
      $values='';
      $URLPicture='none';
      $URLCard='none';
      $URLLicense='none';
        if (Auth::check()) {
          $id = Auth::id();
          $usr= User::where('id', $id)->first();
          $usernameEnd=$usr->name;
          $logged_in=true;
          $regis= Registration::where('user_id', $id)->first();
          $values=json_encode($regis);
          $pic=Ident_image::where('user_id', $id)->where('ident_type', 1)->first();
          $lic=Ident_image::where('user_id', $id)->where('ident_type', 2)->first();
          $car=Ident_image::where('user_id', $id)->where('ident_type', 3)->first();
          if(!empty($pic)){ $URLPicture=$pic->image_url; } else { $URLPicture='none'; }
          if(!empty($lic)){ $URLLicense=$lic->image_url; } else { $URLLicense='none'; }
          if(!empty($car)){ $URLCard=$car->image_url; } else { $URLCard='none'; }
        }
        else {
          $usernameEnd='';
          $logged_in=false;
        }
        $welcomeEndpoint = route('welcome').'|'.$usernameEnd;
        return view('profile.profile',['welcomeEndpoint' => $welcomeEndpoint, 'URLPicture' => $URLPicture, 'URLLicense' => $URLLicense, 'URLCard' => $URLCard, 'registrationValues' => $values]);        
    }
    public function picture(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $regis= Registration::where('user_id', $id)->first();
      $values=json_encode($regis);
      $upload_path = public_path('uploads/pictures');
      $URL= route('welcome').'/uploads/pictures' ;
      $file_name = $request->file->getClientOriginalName();
      $file_type = $request->file->getClientOriginalExtension();
      $file_size = $request->file->getClientOriginalExtension();
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension(); 
      $request->file->move($upload_path, $generated_new_name);
      $img = Ident_image::create([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'type' => $file_type,
                'size' => $file_type,
                'user_id' => $id,
                'ident_type' => 1 
                ]);
      $img->save();
      //return response()->json(['success' => 'You have successfully uploaded "' . $file_name . '"']);      
    }
    public function license(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $regis= Registration::where('user_id', $id)->first();
      $values=json_encode($regis);
      $upload_path = public_path('uploads/licenses');
      $URL= route('welcome').'/uploads/licenses' ;
      $file_name = $request->file->getClientOriginalName();
      $file_type = $request->file->getClientOriginalExtension();
      $file_size = $request->file->getClientOriginalExtension();
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
      $request->file->move($upload_path, $generated_new_name);
      $img = Ident_image::create([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'type' => $file_type,
                'size' => $file_type,
                'user_id' => $id,
                'ident_type' => 2 
                ]);
      $img->save();      
      //return response()->json(['success' => 'You have successfully uploaded "' . $file_name . '"']);    
    }
    public function card(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $regis= Registration::where('user_id', $id)->first();
      $values=json_encode($regis);
      $upload_path = public_path('uploads/cards');
      $URL= route('welcome').'/uploads/cards' ;
      $file_name = $request->file->getClientOriginalName();
      $file_type = $request->file->getClientOriginalExtension();
      $file_size = $request->file->getClientOriginalExtension();
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
      $request->file->move($upload_path, $generated_new_name);
      $img = Ident_image::create([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'type' => $file_type,
                'size' => $file_type,
                'user_id' => $id,
                'ident_type' => 3 
                ]);
      $img->save();      
      //return response()->json(['success' => 'You have successfully uploaded "' . $file_name . '"']);        
    } 
    public function update(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $data=['firstname' => $request->firstname ,'lastname'=> $request->lastname ,'phone'=> $request->phone ,'address' => $request->address ];
      Registration::where('user_id', $id)->update($data);
      return ['redirect' => route('profile')];      
    }               
}
