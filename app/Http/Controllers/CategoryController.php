<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;
use App\Models\Registration;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Tradde;
use App\Models\User;
use App\Models\Choose_categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CategoryController extends Controller
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
    public function getchilds($parent){
      $childs=DB::table('categories')->where('parent','=',$parent)->select('*')->orderby('name')->get();
      return response()->json($childs);      
    }
    public function getparent($categoryid){    
      $category=DB::table('categories')->where('id','=',$categoryid)->first();
      $parent=DB::table('categories')->where('id','=',$category->parent)->first();
      return response()->json($parent);      
    }
    public function choose_categories(){
    	return view('categories.choose');
    }
    public function like(Request $request){
      $iduser = Auth::id();
      $like = Choose_categorie::create([
        'user_id' => $iduser,
        'category_id' => $request->category_id]);
      $like->save();
      $categories=DB::table('choose_categories')->where('user_id','=',$iduser)->select('category_id')->get();
      return response()->json($categories);
    }
    public function getlikes(){
      $iduser = Auth::id();
      $categories=DB::table('choose_categories')->join('categories', 'choose_categories.category_id', '=', 'categories.id')
      ->select('categories.id as id','categories.name as name')
      ->where('user_id','=',$iduser)->get();
      return response()->json($categories);
    }
    public function getusers(){
      $arraycat=[];
      $users=[];
      $iduser = Auth::id();
      $category=DB::table('choose_categories')->where('user_id','=',$iduser)->select('category_id')->get();
      if(!empty($category)){
        foreach ($category as $catkey) {
          $arraycat[]=$catkey->category_id;
        }
        $users = DB::table('users')
          ->join('choose_categories', 'choose_categories.user_id', '=', 'users.id')
          ->select('users.id as id', 'users.name as username')
          ->whereIn('choose_categories.category_id', $arraycat)->get();    
      }
      return response()->json($users);      
    }
    public function GetUsersCategory(){
      $arraycat=[];
      $users=[];      
      $iduser = Auth::id();
      $categories = DB::table('products')
                ->join('traddes', 'traddes.product_id', '=', 'products.id')      
                ->select('products.category_id')
                ->where('traddes.host_user_id','=',$iduser)
                ->orWhere('traddes.target_user_id','=',$iduser)
                ->orWhere('products.user_id','=',$iduser)
                ->groupByRaw('products.category_id')
                ->get();
      if(!empty($categories)){
        foreach ($categories as $catkey) {
          $arraycat[]=$catkey->category_id;
        }
        $users = DB::table('users')
          ->join('products', 'products.user_id', '=', 'users.id')
          ->join('traddes', 'traddes.product_id', '=', 'products.id') 
          ->select('users.id as id', 'users.name as username','ident_images.image_url as image_url')
          ->join('ident_images', 'ident_images.user_id', '=', 'users.id')
          ->whereIn('products.category_id', $arraycat)->where('ident_images.ident_type','=',4)->whereNotIn('users.id', [$iduser])
          ->groupby('users.id', 'users.name','ident_images.image_url')->limit(10)->get();
      }
      return response()->json($users);
    }
    public function matchusers(){
      $arraycat=[];
      $users=[];      
      $iduser = Auth::id();
      $categories = DB::table('products')
                ->join('traddes', 'traddes.product_id', '=', 'products.id')      
                ->select('products.category_id')
                ->where('traddes.host_user_id','=',$iduser)
                ->orWhere('traddes.target_user_id','=',$iduser)
                ->groupByRaw('products.category_id')
                ->get();
      if(!empty($categories)){
        foreach ($categories as $catkey) {
          $arraycat[]=$catkey->category_id;
        }
        $users = DB::table('users')
          ->join('products', 'products.user_id', '=', 'users.id')
          ->join('traddes', 'traddes.product_id', '=', 'products.id') 
          ->select('users.id as id','users.email as email','users.name as username','users.phone as phone','ident_images.image_url as image_url')
          ->join('ident_images', 'ident_images.user_id', '=', 'users.id')
          ->whereIn('products.category_id', $arraycat)->where('ident_images.ident_type','=',4)->whereNotIn('users.id', [$iduser])
          ->groupby('users.id', 'users.name','users.email','users.phone','ident_images.image_url')->paginate(10);
      }
      return view('categories.matchusers',['UserValues' => json_encode($users)]);
    }
    public function search($search){
      $iduser = Auth::id();
      $arraysearch=explode(" ", $search);
      $count=count($arraysearch);
      $categories=array();
      $parent_ids=[1332,1333,1334,1335,1336,1337,1338,1339,1340,1,2,3,4,5,6,7,8,9,10,11,12,13,14,15,16];
      if(count($arraysearch)>=1){
        for ($i = 0; $i < $count; $i++) {
          if(strlen($arraysearch[$i])>=3){
            $cat= DB::table('categories')->where('name', 'like', '%'.$arraysearch[$i].'%')->whereNotIn('id', $parent_ids)->get();
            if(!empty($cat)){
              foreach ($cat as $key) {
                $categories[]=array('id'=>$key->id,'name'=>$key->name);
              }
            }
          }
        }
      }
      return response()->json($categories);
    }         
}
