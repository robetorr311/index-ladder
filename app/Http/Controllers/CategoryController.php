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
}
