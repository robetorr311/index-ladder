<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Registration;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Tradde;
use App\Models\Like_product;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class TraddeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        //
    }
    public function GetTrade($id){
        $trade = DB::table('traddes')->where('id','=',$id)->first();
        return response()->json($trade);
    }
    public function GetTrades()
    {
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $product = DB::table('products')
        ->join('traddes', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
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
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')
        ->where('traddes.host_user_id','=',$iduser)->orWhere('traddes.target_user_id','=',$iduser)->limit(15)->get();
        return response()->json($product);
    }
    public function GetAllMyTrades()
    {
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $product = DB::table('products')
        ->join('traddes', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
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
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')
        ->where('traddes.host_user_id','=',$iduser)->orWhere('traddes.target_user_id','=',$iduser)->paginate(15);
        return view('trades.allmytrades',['TradeValues' => json_encode($product)]);
    }
    public function GetAllTrades()
    {
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
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
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')->paginate(6);
        return view('content.dashboard',['TradeValues' => json_encode($product)]); 
    }
    public function GetTrader($id){
      $user = DB::table('users')
              ->join('registrations', 'registrations.user_id', '=', 'users.id')
              ->select('users.name as name', 'users.email as email', 'users.phone as phone','registrations.address as address')->where('users.id','=',$id)->first();
      return response()->json($user);
    }
    public function GetTraderAvatar($id){
      $image = DB::table('ident_images')->where('user_id','=',$id)->where('ident_type','=',4)->first();
      return response()->json($image);        
    }
    public function GetTraderTrades($id){
      $product = DB::table('products')
        ->join('traddes', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
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
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')
        ->where('traddes.host_user_id','=',$id)->orWhere('traddes.target_user_id','=',$id)->limit(15)->get();
        return response()->json($product);
    }
    public function GetOffer(){
      $types = DB::table('type_offers')->get();
      return response()->json($types);
    }
    public function GetTime(){
      $types = DB::table('time_services')->get();
      return response()->json($types);
    }
}
