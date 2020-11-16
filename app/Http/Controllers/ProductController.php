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
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }
    public function store(Request $request){
       $iduser = Auth::id();     
       $product_id = DB::table('products')->insertGetId(['user_id' => $iduser,
          'name' => $request->name,
          'description' => $request->description,
          'image_id' => 0,
          'type_id' => $request->type_id,
          'category_id' => $request->category_id]);
       $tradde_number=rand(100000,999999).$iduser.$product_id;
       $tradd =Tradde::create(['sell_id' => $iduser,
          'product_id' => $product_id,
          'tradde_number' => $tradde_number,
          'title' => $request->name,
          'item_description' => $request->description,
          'status' => 1,
          'amount' => $request->amount,
          'category_id' => $request->category_id]);
       $tradd->save(); 
       $token=$request->csrfToken;
       $images = Product_image::where('token',$token)->update(['product_id' => $product_id]);
       $img = Product_image::where('product_id',$product_id)->update(['token' => null]);
       $image_id=Product_image::where('product_id',$product_id)->first();
       $prod=Product::where('id',$product_id)->update(['image_id'=>$image_id->id]);
       return response()->json(['success'=>'Success']); 
    }
    public function addnew(){
        if (Auth::check()) {
          $iduser = Auth::id();
          $usr= User::where('id', $iduser)->first();
          $usernameEnd=$usr->name;
          $logged_in=1;
          return view('products.addnew');
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
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
        if (Auth::check()) {
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->where('like_products.user_id', '=',$iduser)
            ->paginate(15);
          if(!empty($product)){ $prod=json_encode($product); } else { $prod="";  } 
          return view('products.favorites',['FavoriteValues' => $prod]);
        }
        else {
          return redirect()->route('login-user');
        } 
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
                     'traddes.amount as amount',
                     'traddes.tradde_number as tradde_number',
                     'traddes.sell_id as sell_id',
                     'traddes.buy_id as buy_id',
                     'traddes.status as status',
                     'product_images.image_url as image_url',
                     'categories.name as category')
            ->where('like_products.user_id', '=',$iduser)
            ->paginate(15);
          return response()->json($product);
    }
    public function upload(Request $request){
      $iduser = Auth::id();
      $upload_path = public_path('uploads/products');
      $URL= route('welcome').'/uploads/products' ;
      $file_name = $request->file->getClientOriginalName();
      $file_type = $request->file->getClientOriginalExtension();
      $file_size = $request->file->getClientOriginalExtension();
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension(); 
      $request->file->move($upload_path, $generated_new_name);
      $token=csrf_token();
      $img = Product_image::create([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'type' => $file_type,
                'size' => $file_type,
                'user_id' => $iduser,
                'token' => $token 
                ]);
      $img->save();
      return response()->json(['token'=>$token]);           
    }
    public function GetUploaded(){
      $token=csrf_token();  
      $images = DB::table('product_images')->where('token','=', $token)->get();
      return response()->json($images);
    }
    public function imagedelete(Request $request){
      $deletedimg = Product_image::where('id',$request->image_id)->delete();
      return response()->json(['success'=>'Success']);           
    }    
}
