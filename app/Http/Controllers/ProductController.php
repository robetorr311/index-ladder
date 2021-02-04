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
use SimpleSoftwareIO\QrCode\Facades\QrCode;
class ProductController extends Controller
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
    
    public function index()
    {
        //
    }
    public function store(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $itemname=$request->itemname;
      $amount=$request->amount;
      $type=$request->type;
      $description=$request->description; 
      $category=$request->category;
      $exchangeitemname=$request->exchangeitemname;
      $exchangeamount=$request->exchangeamount;
      $exchangetype=$request->exchangetype;
      $exchangedescription=$request->exchangedescription;
      $exchangecategory=$request->exchangecategory;
      $offer_images = DB::table('product_images')->where('token',$token)->where('trade_type',1)->first();
      $exch_images = DB::table('product_images')->where('token',$token)->where('trade_type',2)->first();
      $offer_product_id = DB::table('products')->insertGetId(['user_id' => $iduser,
        'name' => $itemname,
        'description' => $description,
        'image_id' => 0,
        'type_id' => $type,
        'category_id' => $category,
        'amount' => $amount]);
      $exchange_product_id = DB::table('products')->insertGetId(['user_id' => $iduser,
        'name' => $exchangeitemname,
        'description' => $exchangedescription,
        'image_id' => 0,
        'type_id' => $exchangetype,
        'category_id' => $exchangecategory,
        'amount' => $exchangeamount]);
      $tradde_number=rand(100000,999999).$iduser.$offer_product_id.$exchange_product_id;
      $tradde_id = DB::table('traddes')->insertGetId(['host_user_id' => $iduser,
        'product_id' => $offer_product_id,
        'exchange_id' => $exchange_product_id,
        'tradde_number' => $tradde_number,
        'status' => 1,
        'category_id'=>$category,
        'ex_category_id'=>$exchangecategory
      ]);
      $offer_images = DB::table('product_images')->where('token',$token)->where('trade_type',1)->update(['product_id' => $offer_product_id,'tradde_id'=>$tradde_id, 'token' => $offer_product_id]);
      $exch_images = DB::table('product_images')->where('token', $token)->where('trade_type',2)->update(['product_id' => $exchange_product_id,'tradde_id'=>$tradde_id, 'token' => $exchange_product_id]);
      $offimage = DB::table('product_images')->where('product_id','=',$offer_product_id)->first();
      $offprod=DB::table('products')->where('id',$offer_product_id)->update(['tradde_id'=>$tradde_id,'image_id'=>$offimage->id]);
      $excimage = DB::table('product_images')->where('product_id','=',$exchange_product_id)->first();
      $excprod=DB::table('products')->where('id',$exchange_product_id)->update(['tradde_id'=>$tradde_id,'image_id'=>$excimage->id]);
      return response()->json(['success'=>'Success']);
    }
    public function update(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $tradde_id=$request->tradde_id;
      $product_id=$request->product_id;
      $exchange_id=$request->exchange_id;
      $itemname=$request->itemname;
      $amount=$request->amount;
      $type=$request->type;
      $description=$request->description; 
      $category=$request->category;
      $exchangeitemname=$request->exchangeitemname;
      $exchangeamount=$request->exchangeamount;
      $exchangetype=$request->exchangetype;
      $exchangedescription=$request->exchangedescription;
      $exchangecategory=$request->exchangecategory;
      $offer_images = DB::table('product_images')->where('token',$token)->where('trade_type',1)->first();
      $exch_images = DB::table('product_images')->where('token',$token)->where('trade_type',2)->first();      
      $offer_product = DB::table('products')->where('id',$product_id)->update(['user_id' => $iduser,
        'name' => $itemname,
        'description' => $description,
        'image_id' => $offer_images->id,
        'type_id' => $type,
        'category_id' => $category,
        'amount' => $amount]);
      $exchange_product = DB::table('products')->where('id',$exchange_id)->update(['user_id' => $iduser,
        'name' => $exchangeitemname,
        'description' => $exchangedescription,
        'image_id' => $exch_images->id,
        'type_id' => $exchangetype,
        'category_id' => $exchangecategory,
        'amount' => $exchangeamount]);
      $tradde = DB::table('traddes')->where('id',$tradde_id)->update(['host_user_id' => $iduser,
        'product_id' => $product_id,
        'exchange_id' => $exchange_id,
        'category_id'=>$category,
        'ex_category_id'=>$exchangecategory
      ]);
      $offer_images = DB::table('product_images')->where('token',$token)->where('trade_type',1)->update(['product_id' => $product_id,'tradde_id'=>$tradde_id, 'token' => $product_id]);
      $exch_images = DB::table('product_images')->where('token',$token)->where('trade_type',2)->update(['product_id' => $exchange_id,'tradde_id'=>$tradde_id, 'token' => $exchange_id]);
      $offimage = DB::table('product_images')->where('product_id','=',$product_id)->first();
      $offprod=DB::table('products')->where('id',$product_id)->update(['tradde_id'=>$tradde_id,'image_id'=>$offimage->id]);
      $excimage = DB::table('product_images')->where('product_id','=',$exchange_id)->first();
      $excprod=DB::table('products')->where('id',$exchange_id)->update(['tradde_id'=>$tradde_id,'image_id'=>$excimage->id]);
      return response()->json(['success'=>'Success']);
    }
    public function addnew(){
      $TradeValues="";
      return view('content.dashboard',['TradeValues' => $TradeValues]); 
    }
    public function edit($id){
      $TradeValues="";
      return view('content.dashboard',['TradeValues' => $TradeValues]); 
    }
    public function GetItem($id){
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $product = DB::table('products')
        ->join('traddes', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('users','traddes.host_user_id','=','users.id')
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
                 'users.name as username',
                 'users.email as email',
                 'users.phone as phone',
                 'categories.name as category')
        ->where('products.id','=',$id)->first();
        return response()->json($product);
    }    
    public function viewproduct($id){
      $TradeValues="";
      $tradde = DB::table('traddes')->where('product_id','=',$id)->first();
      $thisURL=url()->current();
      $path='../public/qrcodes/'.$tradde->tradde_number.'.svg';
      QrCode::size(100);
      QrCode::color(54, 38, 89);
      QrCode::color(54, 38, 89)->generate($thisURL, $path);
      return view('content.dashboard',['TradeValues' => $TradeValues]); 
    }
    public function getproduct($id){
          $iduser = Auth::id();
          $product = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->join('users','traddes.host_user_id','=','users.id')
            ->select('products.*',
                     'traddes.*',
                     'product_images.image_url as image_url',
                     'users.name as username',
                     'users.email as email',
                     'users.phone as phone',
                     'categories.name as category')
            ->where('products.id','=',$id)->first();
        return response()->json($product);
    }
    public function getexchproduct($id){
          $iduser = Auth::id();
          $product = DB::table('products')
            ->join('traddes', 'traddes.exchange_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->join('users','traddes.host_user_id','=','users.id')
            ->select('products.*',
                     'traddes.*',
                     'product_images.image_url as image_url',
                     'users.name as username',
                     'users.email as email',
                     'users.phone as phone',
                     'categories.name as category')
            ->where('products.id','=',$id)->first();
        return response()->json($product);
    }    
    public function getmessages($id){
      $iduser = Auth::id();
      $messages= DB::table('messages')
        ->join('traddes','messages.tradde_id','=','traddes.id')
        ->join('users','messages.user_id','=','users.id')
        ->select('messages.id as id',
                 'messages.tradde_id as tradde_id',
                 'messages.message as message',
                 'messages.views as views',
                 'messages.parent_id as parent_id',
                 'traddes.host_user_id as host_user_id',
                 'users.name as username',
                 'users.email as email',
                 'users.phone as phone')
            ->where('traddes.host_user_id','=',$iduser)->where('traddes.product_id','=',$id)->orderby('messages.id','asc')->get();
       return response()->json($messages);
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
                     'products.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
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
                     'products.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
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
                     'products.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->whereIn('categories.id', $data)
            ->paginate(6);
        return view('content.dashboard',['TradeValues' => json_encode($product)]); 
    }
    public function GetByCategory($product_id){
      $iduser = Auth::id();
      $trades = DB::table('traddes')->where('product_id','=',$product_id)->first();
      $product = DB::table('products')->where('id','=',$product_id)->first();
      $product_category = DB::table('products')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('users', 'products.user_id', '=', 'users.id')
            ->join('type_products','products.type_id','=','type_products.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('traddes', 'products.id','=','traddes.product_id' )
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
            ->select('products.id as id',
                     'products.user_id as user_id',
                     'products.category_id as category_id',
                     'products.name as name',
                     'products.type_id as type_id',
                     'products.amount as amount',
                     'product_images.image_url as image_url',
                     'categories.name as category',
                     'users.email as user_email',
                     'type_products.name as type_product')->where('traddes.status','=',1)->where('products.type_id','=',$product->type_id)->get();
      return response()->json($product_category);
    }
    public function FindByName($search){
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
                     'products.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->where('products.name', 'like', '%'.$search.'%')
            ->paginate(6);
        return view('content.dashboard',['TradeValues' => json_encode($product)]); 
    }    
    public function FindByC($search){
        return ['redirect' => route('FindByCategory',['search' => $search])];
    } 
    public function FindByN($search){
        return ['redirect' => route('FindByName',['search' => $search])];
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
            ->limit(3)->get();
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
            ->limit(3)->get();
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
            ->limit(3)->get();
            return response()->json($se);
    }
    public function Like(Request $request){
      if (Auth::check()) {
        $iduser = Auth::id();
        $like = Like_product::create([
          'user_id' => $iduser,
          'product_id' => $request->product_id]);
        $like->save();
      }
      else{
        $like = Like_product::create(['product_id' => $request->product_id]);
        $like->save();
      }
    }
    public function GetLike($id){
      $success="Fail";  
      if (Auth::check()) {
        $iduser = Auth::id();
        $like= Like_product::where('user_id', $iduser)->where('product_id', $id)->first();
        if(!empty($like)){
          $success="Success"; 
        }
        else {
          $success="Fail"; 
        }
      }
      else{
        $success="Fail"; 
      }
      return response()->json(['success' => $success]);
    }
    public function GetTypes(){
      $types = DB::table('type_products')->get();
      return response()->json($types);
    } 
    public function favorites(){
      $iduser = Auth::id();
      $pro=[];
      $like=[];
      $myproducts = DB::table('products')->where('user_id','=',$iduser)->get();
      if(!empty($myproducts)){
        foreach ($myproducts as $key) {
          $pro[]=$key->id;
        }
      }
      $mylike = DB::table('like_products')->whereIn('product_id',$pro)->get();
      if(!empty($mylike)){
        foreach ($mylike as $key) {
          $like[]=$key->product_id;
        }
      }      
      $product = DB::table('products')
        ->join('traddes', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('like_products', 'products.id', '=', 'like_products.product_id')            
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
              'categories.name as category')
            ->whereIn('products.id', $like)->paginate(6);
          if(!empty($product)){ $prod=json_encode($product); } else { $prod="";  } 
          return view('content.dashboard',['TradeValues' => json_encode($product)]); 
    }
    public function sales(){
        if (Auth::check()) {
          $iduser = Auth::id();
          if(!empty($product)){ $prod=json_encode($product); } else { $prod="";  } 
          return view('products.sales');
        }
        else {
          return redirect()->route('login-user');
        } 
    }
    public function GetSales(){
          $iduser = Auth::id();
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
                     'categories.name as category')
            ->where('traddes.host_user_id', '=',$iduser)
            ->paginate(15);
          return response()->json($product);
    }        
    public function GetFavorites(){
      $iduser = Auth::id();
      $pro=[];
      $like=[];
      $myproducts = DB::table('products')->where('user_id','=',$iduser)->get();
      if(!empty($myproducts)){
        foreach ($myproducts as $key) {
          $pro[]=$key->id;
        }
      }
      $mylike = DB::table('like_products')->whereIn('product_id',$pro)->get();
      if(!empty($mylike)){
        foreach ($mylike as $key) {
          $like[]=$key->product_id;
        }
      }
      $mylike2 = DB::table('like_products')->where('user_id',$iduser)->get();
      if(!empty($mylike2)){
        foreach ($mylike2 as $key) {
          $like[]=$key->product_id;
        }
      }
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
          'categories.name as category')
        ->whereIn('products.id', $like)->get();
          return response()->json($product);
    }
    public function GetUsersFavorites(){
      $iduser = Auth::id();
      $pro=[];
      $like=[];
      $myproducts = DB::table('products')->where('user_id','=',$iduser)->get();
      if(!empty($myproducts)){
        foreach ($myproducts as $key) {
          $pro[]=$key->id;
        }
      }
      $myproducts2 = DB::table('traddes')->where('host_user_id','=',$iduser)->get();
      if(!empty($myproducts2)){
        foreach ($myproducts2 as $key) {
          $pro[]=$key->product_id;
        }
      }
      $myproducts3 = DB::table('traddes')->where('target_user_id','=',$iduser)->get();
      if(!empty($myproducts3)){
        foreach ($myproducts3 as $key) {
          $pro[]=$key->product_id;
        }
      }
      $mylike = DB::table('like_products')->whereIn('product_id',$pro)->whereNotIn('user_id',[$iduser])->get();
      if(!empty($mylike)){
        foreach ($mylike as $key) {
          $like[]=$key->product_id;
        }
      }
      $usr=[];
      $pro = DB::table('like_products')->whereIn('product_id',$like)->get();
      if(!empty($pro)){
        foreach ($pro as $key) {
          $usr[]=$key->user_id;
        }
      }
      $users = DB::table('users')
          ->join('like_products', 'like_products.user_id', '=', 'users.id')
          ->join('ident_images', 'ident_images.user_id', '=', 'users.id')
          ->join('products', 'like_products.product_id', '=', 'products.id')          
          ->join('traddes', 'traddes.product_id', '=', 'products.id') 
          ->select('users.id as id', 'users.name as username','ident_images.image_url as image_url')
          ->whereIn('users.id', $usr)->where('ident_images.ident_type','=',4)
          ->groupby('users.id', 'users.name','ident_images.image_url')->limit(10)->get();
      return response()->json($users);      
    }
    public function matchusers() {
      $iduser = Auth::id();
      $arraycat=[];
      $users=[];
      $categories = DB::table('like_products')
                ->join('products', 'like_products.product_id', '=', 'products.id')
                ->join('traddes', 'traddes.product_id', '=', 'products.id')      
                ->select('products.category_id')
                ->where('like_products.user_id','=',$iduser)
                ->groupByRaw('products.category_id')
                ->get();
      if(!empty($categories)){
        foreach ($categories as $catkey) {
          $arraycat[]=$catkey->category_id;
        }
        $users = DB::table('users')
          ->join('like_products', 'like_products.user_id', '=', 'users.id')
          ->join('ident_images', 'ident_images.user_id', '=', 'users.id')
          ->join('products', 'like_products.product_id', '=', 'products.id')          
          ->join('traddes', 'traddes.product_id', '=', 'products.id') 
          ->select('users.id as id', 'users.name as username','ident_images.image_url as image_url')
          ->whereIn('products.category_id', $arraycat)->where('ident_images.ident_type','=',4)->whereNotIn('users.id', [$iduser])
          ->groupby('users.id', 'users.name','ident_images.image_url')->paginate(10);
      }
      return view('products.matchusers',['UserValues' => json_encode($users)]);
    }    
}
