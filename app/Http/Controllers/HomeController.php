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
use Illuminate\Support\Facades\Route;
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
      return redirect()->route('dashboard');              
    }
    function dashboard(){
      $iduser = Auth::id();
      $trd=[];
      $seed=DB::table('seeds')->where('user_id','=',$iduser)->get();
      if(!empty($seed)){
        foreach ($seed as $key) {
          $trd[]=$key->category_id;
        }
      }
      $products = DB::table('products')
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
                     'products.description as description',
                     'product_images.image_url as image_url',
                     'categories.name as category',
                     'users.email as user_email',
                     'type_products.name as type_product')->whereIn('products.category_id',$trd)->whereNotIn('products.user_id',[$iduser])->paginate(15);
      return view('content.dashboard',['TradeValues' => json_encode($products)]); 
    }
    
}
