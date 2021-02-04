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
    public function seedstore(Request $request){
      $iduser = Auth::id();
      $type_id=$request->type_id;
      $category_id=$request->category_id;
      $categories=DB::table('seeds')->insert(['user_id' => $iduser,
        'type_id' => $type_id,
        'category_id' => $category_id]);
      return response()->json(['success'=>'Success']);
    }
    public function seeddelete(Request $request){
      $iduser = Auth::id();
      $id=$request->id;
      $categories=DB::table('seeds')->where('id','=',$id)->delete();
      return response()->json(['success'=>'Success']);
    }    
    public function GetSeedProducts(){
      $iduser = Auth::id();
      $categories=DB::table('seeds')
        ->join('categories', 'seeds.category_id','=','categories.id')
        ->select('seeds.id as id',
               'categories.id as category_id',
               'categories.name as category')
        ->where('user_id','=',$iduser)
        ->where('seeds.type_id','=',1331)->get();
      return response()->json($categories);
    } 
    public function GetSeedSkills(){
      $iduser = Auth::id();
      $categories=DB::table('seeds')
        ->join('categories', 'seeds.category_id','=','categories.id')
        ->select('seeds.id as id',
               'categories.id as category_id',
               'categories.name as category')
        ->where('user_id','=',$iduser)
        ->where('seeds.type_id','=',1330)->get();
      return response()->json($categories);
    } 
    public function GetSeedServices(){
      $iduser = Auth::id();
      $categories=DB::table('seeds')
        ->join('categories', 'seeds.category_id','=','categories.id')
        ->select('seeds.id as id',
               'categories.id as category_id',
               'categories.name as category')
        ->where('user_id','=',$iduser)
        ->where('seeds.type_id','=',1329)->get();
      return response()->json($categories);
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
      $categories = DB::table('traddes')     
                ->select('category_id')
                ->where('traddes.host_user_id','=',$iduser)
                ->orWhere('traddes.target_user_id','=',$iduser)
                ->groupByRaw('traddes.category_id')
                ->get();
      if(!empty($categories)){
        foreach ($categories as $catkey) {
          $arraycat[]=$catkey->category_id;
        }
      }
      $Excategories = DB::table('traddes')     
                ->select('ex_category_id')
                ->where('traddes.host_user_id','=',$iduser)
                ->orWhere('traddes.target_user_id','=',$iduser)
                ->groupByRaw('traddes.ex_category_id')
                ->get();
        if(!empty($Excategories)){
          foreach ($Excategories as $catekey) {
            $arraycat[]=$catekey->ex_category_id;
          }
        }
        $host_users = DB::table('traddes')->whereIn('category_id',$arraycat)->whereNotIn('host_user_id',[$iduser])->select('traddes.host_user_id as id')->get();
        if(!empty($host_users)){
          foreach ($host_users as $key) {
            $users[]=$key->id;
          }
        }          
        $target_users = DB::table('traddes')->whereIn('ex_category_id',$arraycat)->whereNotIn('target_user_id',[$iduser])->select('traddes.target_user_id as id')->get();
        if(!empty($target_users)){
          foreach ($target_users as $key) {
            $users[]=$key->id;
          }
      }        
      $all_users = DB::table('users')->join('ident_images', 'ident_images.user_id', '=', 'users.id')->select('users.id as id','users.name as name','ident_images.image_url as image_url')->where('ident_images.ident_type','=',4)->whereIn('users.id',$users)->groupBy('users.id','users.name','ident_images.image_url')->get();
      return response()->json($all_users);
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
      $cat=[];
      $parent_ids=[1329,1330,1331,1332,1334,1335,1336,1337,1338,1339,1340,1799,1800,1801,1802,1803,1804,1805,1806,1807,1808,1809,1810,1811,1812,1813,1957,1958,1959,1960,1961,1962,1963,1964,1965,1966,1967,1968,1969,1970,1971,1796,1797];
      if(count($arraysearch)>=1){
        for ($k = 0; $k < $count; $k++) {
            $words= DB::table('key_words')->where('name', 'like', '%'.$arraysearch[$k].'%')->get();
            if(!empty($words)){
              foreach ($words as $key) {
                $cat[]=$key->category_id;
              }
            }
        }
        for ($c = 0; $c < $count; $c++) {
          if(strlen($arraysearch[$c])>=3){
            $categ= DB::table('categories')->where('name', 'like', '%'.$arraysearch[$c].'%')->whereNotIn('id', $parent_ids)->get();
            if(!empty($categ)){
              foreach ($categ as $key) {
                $cat[]=$key->id;
              }
            }
          }
        }
        for ($i = 0; $i < $count; $i++) {
          if(strlen($arraysearch[$i])>=3){
            $catego= DB::table('categories')->whereIn('id', $cat)->get();
            if(!empty($catego)){
              foreach ($catego as $key) {
                $categories[]=array('id'=>$key->id,'name'=>$key->name);
              }
            }
          }
        }        
      }
      return response()->json($categories);
    }
    public function GetDetailedProductRating(){
      $iduser = Auth::id();
      $fairness = '';
      $description = '';
      $value = '';
      $satisfied = '';
      $honesty = '';
      $hostqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.target_user_id', '=', 'users.id')
                ->join('products', 'traddes.product_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.host_user_id','=',$iduser)->where('products.type_id','=',1331)->get();
      $targetqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.host_user_id', '=', 'users.id')
                ->join('products', 'traddes.exchange_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.target_user_id','=',$iduser)->where('products.type_id','=',1331)->get();
      $collection = collect($hostqualify);
      $merged = $collection->merge($targetqualify);
      $merged->all();
      $fairness = $merged->implode('fairness',',');
      $description = $merged->implode('description',',');
      $value = $merged->implode('value',',');
      $satisfied = $merged->implode('satisfied',',');
      $honesty = $merged->implode('honesty',',');
      $labels = $merged->implode('user_email',',');       
      return response()->json(['labels'=>$labels,'fairness' => $fairness,'description' => $description,'value' => $value,'satisfied' => $satisfied,'honesty' => $honesty]);
    }
    public function GetDetailedSkillRating(){
      $iduser = Auth::id();
      $fairness = '';
      $description = '';
      $value = '';
      $satisfied = '';
      $honesty = '';
      $hostqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.target_user_id', '=', 'users.id')
                ->join('products', 'traddes.product_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.host_user_id','=',$iduser)->where('products.type_id','=',1330)->get();
      $targetqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.host_user_id', '=', 'users.id')
                ->join('products', 'traddes.exchange_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.target_user_id','=',$iduser)->where('products.type_id','=',1330)->get();
      $collection = collect($hostqualify);
      $merged = $collection->merge($targetqualify);
      $merged->all();
      $fairness = $merged->implode('fairness',',');
      $description = $merged->implode('description',',');
      $value = $merged->implode('value',',');
      $satisfied = $merged->implode('satisfied',',');
      $honesty = $merged->implode('honesty',',');
      $labels = $merged->implode('user_email',',');       
      return response()->json(['labels'=>$labels,'fairness' => $fairness,'description' => $description,'value' => $value,'satisfied' => $satisfied,'honesty' => $honesty]);
    }
    public function GetDetailedServiceRating(){
      $iduser = Auth::id();
      $fairness = '';
      $description = '';
      $value = '';
      $satisfied = '';
      $honesty = '';
      $hostqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.target_user_id', '=', 'users.id')
                ->join('products', 'traddes.product_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.host_user_id','=',$iduser)->where('products.type_id','=',1329)->get();
      $targetqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.host_user_id', '=', 'users.id')
                ->join('products', 'traddes.exchange_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.target_user_id','=',$iduser)->where('products.type_id','=',1329)->get();
      $collection = collect($hostqualify);
      $merged = $collection->merge($targetqualify);
      $merged->all();
      $fairness = $merged->implode('fairness',',');
      $description = $merged->implode('description',',');
      $value = $merged->implode('value',',');
      $satisfied = $merged->implode('satisfied',',');
      $honesty = $merged->implode('honesty',',');
      $labels = $merged->implode('user_email',',');       
      return response()->json(['labels'=>$labels,'fairness' => $fairness,'description' => $description,'value' => $value,'satisfied' => $satisfied,'honesty' => $honesty]);
    }
    public function GetProductRating(){
      $iduser = Auth::id();
      $fairness = '';
      $description = '';
      $value = '';
      $satisfied = '';
      $honesty = '';
      $hostqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.target_user_id', '=', 'users.id')
                ->join('products', 'traddes.product_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.host_user_id','=',$iduser)->where('products.type_id','=',1331)->get();
      $targetqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.host_user_id', '=', 'users.id')
                ->join('products', 'traddes.exchange_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.target_user_id','=',$iduser)->where('products.type_id','=',1331)->get();
      $collection = collect($hostqualify);
      $merged = $collection->merge($targetqualify);
      $merged->all();
      $f = $merged->avg('fairness');
      $fairness = round($f, 0);
      $d = $merged->avg('description');
      $description = round($d, 0);
      $v = $merged->avg('value');
      $value = round($v,0);
      $s=$merged->avg('satisfied');
      $satisfied = round($s,0);
      $h = $merged->avg('honesty');
      $honesty = round($h,0);
      return response()->json(['fairness' => $fairness,'description' => $description,'value' => $value,'satisfied' => $satisfied,'honesty' => $honesty]);
    }
    public function GetSkillRating(){
      $iduser = Auth::id();
      $fairness = '';
      $description = '';
      $value = '';
      $satisfied = '';
      $honesty = '';
      $hostqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.target_user_id', '=', 'users.id')
                ->join('products', 'traddes.product_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.host_user_id','=',$iduser)->where('products.type_id','=',1330)->get();
      $targetqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.host_user_id', '=', 'users.id')
                ->join('products', 'traddes.exchange_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.target_user_id','=',$iduser)->where('products.type_id','=',1330)->get();
      $collection = collect($hostqualify);
      $merged = $collection->merge($targetqualify);
      $merged->all();
      $f = $merged->avg('fairness');
      $fairness = round($f, 0);
      $d = $merged->avg('description');
      $description = round($d, 0);
      $v = $merged->avg('value');
      $value = round($v,0);
      $s=$merged->avg('satisfied');
      $satisfied = round($s,0);
      $h = $merged->avg('honesty');
      $honesty = round($h,0);
      return response()->json(['fairness' => $fairness,'description' => $description,'value' => $value,'satisfied' => $satisfied,'honesty' => $honesty]);
    }
    public function GetServiceRating(){
      $iduser = Auth::id();
      $fairness = '';
      $description = '';
      $value = '';
      $satisfied = '';
      $honesty = '';
      $hostqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.target_user_id', '=', 'users.id')
                ->join('products', 'traddes.product_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.host_user_id','=',$iduser)->where('products.type_id','=',1329)->get();
      $targetqualify = DB::table('qualifies')
                ->join('traddes', 'qualifies.tradde_id', '=', 'traddes.id')
                ->join('users', 'traddes.host_user_id', '=', 'users.id')
                ->join('products', 'traddes.exchange_id', '=', 'products.id')                
                ->select('qualifies.tradde_id as id',
                     'qualifies.user_id as user_id',
                     'qualifies.fairness as fairness',
                     'qualifies.description as description',
                     'qualifies.value as value',
                     'qualifies.satisfied as satisfied',
                     'qualifies.honesty as honesty',
                     'qualifies.qualify as qualify',
                     'qualifies.comments as comments',
                     'users.email as user_email')
                ->where('qualifies.user_id','=',$iduser)
                ->where('traddes.target_user_id','=',$iduser)->where('products.type_id','=',1329)->get();
      $collection = collect($hostqualify);
      $merged = $collection->merge($targetqualify);
      $merged->all();
      $f = $merged->avg('fairness');
      $fairness = round($f, 0);
      $d = $merged->avg('description');
      $description = round($d, 0);
      $v = $merged->avg('value');
      $value = round($v,0);
      $s=$merged->avg('satisfied');
      $satisfied = round($s,0);
      $h = $merged->avg('honesty');
      $honesty = round($h,0);
      return response()->json(['fairness' => $fairness,'description' => $description,'value' => $value,'satisfied' => $satisfied,'honesty' => $honesty]);
    }  
}
