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
    public function GetTrades()
    {
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
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
        ->where('traddes.sell_id','=',$iduser)->orWhere('traddes.buy_id','=',$iduser)->get();
        return response()->json($product);
    }
}
