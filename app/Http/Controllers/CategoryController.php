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
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;

class CategoryController extends Controller
{
    public function getchilds($parent){
      $childs=DB::table('categories')->where('parent','=',$parent)->select('*')->orderby('name')->get();
      return response()->json($childs);      
    }
    public function getparent($categoryid){    
      $category=DB::table('categories')->where('id','=',$categoryid)->first();
      $parent=DB::table('categories')->where('id','=',$category->parent)->first();
      return response()->json($parent);      
    }    
    
}
