<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Registration;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Tradde;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function addnew(){
        if (Auth::check()) {
          $iduser = Auth::id();
          $usr= User::where('id', $iduser)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
          $welcomeEndpoint = route('welcome').'|'.$usernameEnd; 
          return view('products.addnew',['welcomeEndpoint' => $welcomeEndpoint]);
        }
        else {
          return redirect()->route('login-user');
        }        
    }    
    public function viewproduct($id){
        if (Auth::check()) {
          $iduser = Auth::id();
          $usr= User::where('id', $iduser)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
          $product = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->join('registrations','traddes.sell_id','=','registrations.user_id')
            ->select('products.id as id',
                     'products.category_id as category_id',
                     'products.name as name',               
                     'products.description as description',
                     'products.type_id as type_id',
                     'traddes.id as tradde_id',
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'registrations.firstname as firstname',
                     'registrations.lastname as lastname',
                     'registrations.email as email',
                     'registrations.phone as phone',
                     'categories.name as category')
            ->where('products.id','=',$id)->first();
          $messages= DB::table('messages')
            ->join('traddes','messages.tradde_id','=','traddes.id')
            ->join('registrations','messages.user_id','=','registrations.id')
            ->select('messages.id as id',
                     'messages.tradde_id as tradde_id',
                     'messages.message as message',               
                     'messages.views as views',
                     'messages.parent_id as parent_id',
                     'traddes.sell_id as sell_id',
                     'registrations.firstname as firstname',
                     'registrations.lastname as lastname',
                     'registrations.email as email',
                     'registrations.phone as phone')            
            ->where('traddes.sell_id','=',$iduser)->orderby('messages.id','asc')->get();
        }
        else {
          $usernameEnd='';
          $logged_in=0;
          $messages=[];
          $count=0;
          $product = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->join('registrations','traddes.sell_id','=','registrations.user_id')
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
                     'product_images.image_url as image_url',
                     'registrations.firstname as firstname',
                     'registrations.lastname as lastname',
                     'registrations.email as email',
                     'registrations.phone as phone',
                     'categories.name as category')
            ->where('products.id','=',$id)->first();
        }
        if(!empty($product)){ $prod=json_encode($product); } else { $prod="";  } 
        if(!empty($messages)){ $mess=json_encode($messages); } else { $mess='json_encode($messages)'; } 
        return view('products.product',['ProductValue' => $prod, 'LoadedMessages' => $mess]);
    }
    public function gallery(){
        if (Auth::check()) {
          $iduser = Auth::id();
          $usr= User::where('id', $iduser)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')->paginate(15);
        }
        else {
          $usernameEnd='';
          $logged_in=0;
          $messages=[];
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')->paginate(15);        
        }
        if(!empty($product)){ $prod=json_encode($product); } else { $prod="";  } 
        if(!empty($messages)){ $mess=json_encode($messages); } else { $mess='json_encode($messages)'; } 
        $CountLogged=$logged_in;
        return view('products.gallery',['GalleryValues' => $prod, 'CountLogged' => $CountLogged]);
    }
    public function FindByCategory($search){
        if (Auth::check()) {
          $iduser = Auth::id();
          $usr= User::where('id', $iduser)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
          $data=explode(',', $search);
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->whereIn('categories.id', $data)
            ->paginate(15);
        }
        else {
          $usernameEnd='';
          $logged_in=0;
          $messages=[];
          $data=explode(',', $search);
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->whereIn('categories.id', $data)
            ->paginate(15);         
        }
        $count=0;
        if(!empty($product)){ $prod=json_encode($product); } else { $prod="";  } 
        if(!empty($messages)){ $mess=json_encode($messages); } else { $mess='json_encode($messages)'; } 
        $CountLogged=$logged_in.'|'.$count;
        return view('products.gallery',['GalleryValues' => $prod, 'CountLogged' => $CountLogged]);
    }
    public function FindByName($search){
        if (Auth::check()) {
          $iduser = Auth::id();
          $usr= User::where('id', $iduser)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->where('products.name', 'like', '%'.$search.'%')
            ->paginate(15);
        }
        else {
          $usernameEnd='';
          $logged_in=0;
          $messages=[];
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->where('products.name', 'like', '%'.$search.'%')
            ->paginate(15);
        }
        $count=0;
        if(!empty($product)){ $prod=json_encode($product); } else { $prod="";  } 
        if(!empty($messages)){ $mess=json_encode($messages); } else { $mess='json_encode($messages)'; } 
        $CountLogged=$logged_in.'|'.$count;
        return view('products.gallery',['GalleryValues' => $prod, 'CountLogged' => $CountLogged]);
    }    
    public function FindByC($search){
        return ['redirect' => route('FindByCategory',['search' => $search])];
    } 
    public function FindByN($search){
        return ['redirect' => route('FindByName',['search' => $search])];
    }            
}
