<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Registration;
use App\Models\User;
use App\Models\Ident_image;
use Illuminate\Support\Facades\DB;

class Tradde extends Model
{
    use HasFactory;
    protected $fillable = ['host_user_id','tradde_number','target_user_id','product_id','status','category_id','exchange_id','ex_category_id'];
    public static function AllPublishedwithProductsandImages()
    {
      return Tradde::join('products', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
        ->select('products.id as id',
                 'products.category_id as category_id',
                 'products.name as name',
                 'products.description as description',
                 'products.type_id as type_id',
                 'products.amount as amount',
                 'traddes.id as tradde_id',                 
                 'traddes.tradde_number as tradde_number',
                 'traddes.host_user_id as host_user_id',
                 'traddes.target_user_id as target_user_id',
                 'traddes.status as status',
                 'status_trades.name as status_name',
                 'product_images.image_url as image_url',
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')->where('traddes.status','=',1)->get();
    }    
    public static function ActivewithProductsandImages($iduser)
    {
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=Tradde::where('host_user_id','=',$iduser)->where('status','<',3)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=Tradde::where('target_user_id','=',$iduser)->where('status','<',3)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
        }
      } 	
      return Tradde::join('products', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
        ->select('products.id as id',
                 'products.category_id as category_id',
                 'products.name as name',
                 'products.description as description',
                 'products.type_id as type_id',
                 'products.amount as amount',
                 'traddes.id as tradde_id',                 
                 'traddes.tradde_number as tradde_number',
                 'traddes.host_user_id as host_user_id',
                 'traddes.target_user_id as target_user_id',
                 'traddes.status as status',
                 'status_trades.name as status_name',
                 'product_images.image_url as image_url',
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')->whereIn('traddes.id',$trd)->get();
    }
    public static function InProgresswithProductsandImages($iduser)
    {
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=Tradde::where('host_user_id','=',$iduser)->where('status','=',2)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=Tradde::where('target_user_id','=',$iduser)->where('status','=',2)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
        }
      } 	
      return Tradde::join('products', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
        ->select('products.id as id',
                 'products.category_id as category_id',
                 'products.name as name',
                 'products.description as description',
                 'products.type_id as type_id',
                 'products.amount as amount',
                 'traddes.id as tradde_id',                 
                 'traddes.tradde_number as tradde_number',
                 'traddes.host_user_id as host_user_id',
                 'traddes.target_user_id as target_user_id',
                 'traddes.status as status',
                 'status_trades.name as status_name',
                 'product_images.image_url as image_url',
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')->whereIn('traddes.id',$trd)->get();
    }
    public static function CancelledwithProductsandImages($iduser)
    {
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=Tradde::where('host_user_id','=',$iduser)->where('status','=',3)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=Tradde::where('target_user_id','=',$iduser)->where('status','=',3)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
        }
      } 	
      return Tradde::join('products', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
        ->select('products.id as id',
                 'products.category_id as category_id',
                 'products.name as name',
                 'products.description as description',
                 'products.type_id as type_id',
                 'products.amount as amount',
                 'traddes.id as tradde_id',                 
                 'traddes.tradde_number as tradde_number',
                 'traddes.host_user_id as host_user_id',
                 'traddes.target_user_id as target_user_id',
                 'traddes.status as status',
                 'status_trades.name as status_name',
                 'product_images.image_url as image_url',
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')->whereIn('traddes.id',$trd)->get();
    }
    public static function CompletedwithProductsandImages($iduser)
    {
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=Tradde::where('host_user_id','=',$iduser)->where('status','=',4)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=Tradde::where('target_user_id','=',$iduser)->where('status','=',4)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
        }
      } 	
      return Tradde::join('products', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
        ->select('products.id as id',
                 'products.category_id as category_id',
                 'products.name as name',
                 'products.description as description',
                 'products.type_id as type_id',
                 'products.amount as amount',
                 'traddes.id as tradde_id',                 
                 'traddes.tradde_number as tradde_number',
                 'traddes.host_user_id as host_user_id',
                 'traddes.target_user_id as target_user_id',
                 'traddes.status as status',
                 'status_trades.name as status_name',
                 'product_images.image_url as image_url',
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')->whereIn('traddes.id',$trd)->get();
    }
}
