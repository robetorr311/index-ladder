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
      $description=$request->description;
      $type=$request->type;
      $category=$request->category;
      $product_id = DB::table('products')->insertGetId(['user_id' => $iduser,
        'name' => $itemname,
        'description' => $description,
        'image_id' => 0,
        'type_id' => $type,
        'category_id' => $category,
        'amount' => $amount]);
      $images = Product_image::where('token',$token)->update(['product_id' => $product_id,'token' => $product_id]);
      $image = DB::table('product_images')->where('product_id','=',$product_id)->first();
      $prod=Product::where('id',$product_id)->update(['image_id'=>$image->id]);
      $tradde_number=rand(100000,999999).$iduser.$product_id;
      $tradde_id = DB::table('traddes')->insertGetId(['host_user_id' => $iduser,
        'product_id' => $product_id,
        'tradde_number' => $tradde_number,
        'status' => 1,'category_id'=>$category]);
      $prod=Product::where('id',$product_id)->update(['tradde_id'=>$tradde_id]);
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
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',1)
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
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',2)
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
                     'traddes.tradde_number as tradde_number',
                     'traddes.host_user_id as host_user_id',
                     'traddes.target_user_id as target_user_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url')
            ->where('products.type_id','=',3)
            ->orderBy('products.id','asc')
            ->limit(4)->get();
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
            ->where('like_products.user_id', '=',$iduser)
            ->paginate(6);
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
            ->where('like_products.user_id', '=',$iduser)->get();
          return response()->json($product);
    }
    public function GetUsersFavorites(){
      $iduser = Auth::id();
      $arraycat=[];
      $users=[];
      $products = DB::table('like_products')->where('like_products.user_id','=',$iduser)->get();      
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
          ->groupby('users.id', 'users.name','ident_images.image_url')->limit(10)->get();
      }
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
