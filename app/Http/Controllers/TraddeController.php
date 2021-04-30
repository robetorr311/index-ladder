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
use Barryvdh\DomPDF\Facade as PDF;
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
    public function publish(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $itemname=$request->itemname;
      $amount=$request->amount;
      $type=$request->type;
      $description=$request->description; 
      $category=$request->category;
      $offer_images = DB::table('product_images')->where('token',$token)->where('trade_type',1)->first();
      $offer_product_id = DB::table('products')->insertGetId(['user_id' => $iduser,
        'name' => $itemname,
        'description' => $description,
        'image_id' => 0,
        'type_id' => $type,
        'category_id' => $category,
        'amount' => $amount]);
      $tradde_number=rand(100000,999999).$iduser.$offer_product_id;
      $tradde_id = DB::table('traddes')->insertGetId(['host_user_id' => $iduser,
        'product_id' => $offer_product_id,
        'tradde_number' => $tradde_number,
        'status' => 1,
        'category_id'=>$category,
      ]);
      $offer_images = DB::table('product_images')->where('token',$token)->where('trade_type',1)->update(['product_id' => $offer_product_id,'tradde_id'=>$tradde_id, 'token' => $offer_product_id]);
      $offimage = DB::table('product_images')->where('product_id','=',$offer_product_id)->first();
      $offprod=DB::table('products')->where('id',$offer_product_id)->update(['tradde_id'=>$tradde_id,'image_id'=>$offimage->id]);
      return response()->json(['success'=>'Success']);
    }
    public function propose(Request $request){
      $iduser = Auth::id();
      $token=$request->csrfToken;
      $exchangetype=$request->exchangetype;
      $exchangeitemname=$request->exchangeitemname;
      $exchangeamount=$request->exchangeamount;
      $exchangedescription=$request->exchangedescription;
      $exchangecategory=$request->exchangecategory;
      $tradde_id=$request->tradde_id;
      $trd = DB::table('traddes')->where('id','=',$tradde_id)->first();
      $exchange_images = DB::table('product_images')->where('token',$token)->where('trade_type',1)->first();
      $exchange_product_id = DB::table('products')->insertGetId(['user_id' => $iduser,
        'name' => $exchangeitemname,
        'description' => $exchangedescription,
        'image_id' => 0,
        'type_id' => $exchangetype,
        'category_id' => $exchangecategory,
        'amount' => $exchangeamount]);
      $proposal = DB::table('proposals')->insert(['user_id' => $iduser,
        'product_id' => $exchange_product_id,
        'tradde_id' => $tradde_id,
        'status' => 'pending',
        'token' => $token
      ]);
      $exchange_images = DB::table('product_images')->where('token',$token)->where('trade_type',2)->update(['product_id' => $exchange_product_id, 'token' => $exchange_product_id]);
      $offimage = DB::table('product_images')->where('product_id','=',$exchange_product_id)->first();
      $offprod=DB::table('products')->where('id',$exchange_product_id)->update(['image_id'=>$offimage->id]);
      DB::table('notifications')->insert(['user_id' => $trd->host_user_id, 'type_id' => 7,'product_id' => $trd->product_id]);       
      return response()->json(['success'=>'Success']);
    }
    public function CountProposal($tradde_id){
      $iduser = Auth::id();
      $proposal = DB::table('proposals')->where('user_id','=',$iduser)->where('tradde_id','=',$tradde_id)->where('status','=','pending')->count();
      return response()->json($proposal);
    }
    public function GetProposal($tradde_id){
      $iduser = Auth::id();
      $proposal = DB::table('proposals')
      ->join('products', 'proposals.product_id', '=', 'products.id')
      ->join('product_images', 'products.image_id', '=', 'product_images.id')
      ->join('categories', 'products.category_id', '=', 'categories.id')
      ->select('proposals.id as id',
               'products.category_id as category_id',
               'products.name as name',
               'products.description as description',
               'products.amount as amount',
               'product_images.image_url as image_url',
               'categories.name as category')->where('proposals.user_id','=',$iduser)->where('proposals.tradde_id','=',$tradde_id)->first();
      return response()->json($proposal);
    }
    public function AcceptedProposal($tradde_id){
      $iduser = Auth::id();
      $trd = DB::table('traddes')->where('id','=',$tradde_id)->first();
      $proposal = DB::table('proposals')
      ->join('products', 'proposals.product_id', '=', 'products.id')
      ->join('product_images', 'products.image_id', '=', 'product_images.id')
      ->join('categories', 'products.category_id', '=', 'categories.id')
      ->select('proposals.id as id',
               'products.category_id as category_id',
               'products.name as name',
               'products.description as description',
               'products.amount as amount',
               'product_images.image_url as image_url',
               'categories.name as category')->where('proposals.user_id','=',$trd->target_user_id)->where('proposals.tradde_id','=',$tradde_id)->first();
      return response()->json($proposal);      
    }
    public function GetPProposals($product_id){
      $trade = DB::table('traddes')->where('product_id','=',$product_id)->first();
      $proposal = DB::table('proposals')
      ->join('users', 'proposals.user_id', '=', 'users.id')
      ->join('products', 'proposals.product_id', '=', 'products.id')
      ->join('product_images', 'products.image_id', '=', 'product_images.id')
      ->join('categories', 'products.category_id', '=', 'categories.id')
      ->select('proposals.id as id',
               'proposals.tradde_id as tradde_id',
               'proposals.product_id as product_id',
               'products.category_id as category_id',
               'products.name as name',
               'products.description as description',
               'products.amount as amount',
               'product_images.image_url as image_url',
               'users.name as username',
               'users.email as email',
               'users.phone as phone',
               'categories.name as category')->where('proposals.tradde_id','=',$trade->id)->where('status','=','pending')->get();
      return response()->json($proposal);
    }
    public function GetTrade($id){
        $trade = DB::table('traddes')->where('id','=',$id)->first();
        return response()->json($trade);
    }
    public function accept(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $time=time();
      $proposal_id=$request->proposal_id;
      $time_service= $request->time_service;
      $starting_at= $request->starting_at;
      $end_at= $request->end_at;    
      $starting_at=Carbon::now();
      $proposal = DB::table('proposals')->where('id','=',$proposal_id)->first();
      $trade = DB::table('traddes')->where('id','=',$proposal->tradde_id)->first();
      $product = DB::table('products')->where('id','=',$proposal->product_id)->first();
      $tradde = DB::table('traddes')->where('product_id','=',$trade->product_id)->update(['target_user_id' => $proposal->user_id,'status'=>2,'exchange_id'=>$product->id,'ex_category_id'=>$product->category_id]);
      $exchange_product = DB::table('products')->where('id','=',$product->id)->update(['tradde_id'=>$trade->id ,'starting_at' => $starting_at]);
      $exchange_images = DB::table('product_images')->where('product_id',$product->id)->update(['tradde_id' => $trade->id]);
      $proposals = DB::table('proposals')->where('tradde_id','=',$trade->id)->whereNotIn('id',[$proposal_id])->update(['status' => 'rejected']);
      $prop = DB::table('proposals')->where('id','=',$proposal_id)->update(['status' => 'accepted']);
      DB::table('notifications')->insert(['user_id' => $proposal->user_id, 'type_id' => 8,'product_id' => $trade->product_id]); 
      DB::table('notifications')->insert(['user_id' => $trade->host_user_id, 'type_id' => 9,'product_id' => $trade->product_id]);
      $user_host= DB::table('users')->where('id','=',$trade->host_user_id)->first();
      $user_target= DB::table('users')->where('id','=',$proposal->user_id)->first();
      $trd = DB::table('traddes')->where('id','=',$proposal->tradde_id)->first();
      DB::table('agreements')->insert(['tradde_id' => $trd->id, 'offer' => $trd->product_id, 'exchange' => $trd->exchange_id, 'user_id' => $iduser, 'time_exchange' => $time_service, 'time_offer' => $time, 'starting_at' => $starting_at, 'end_at' => $end_at, 'created_at' => Carbon::now()]); 
      $pdf_path = public_path('pdf/');
      $pdf_file =$pdf_path . 'trade.pdf';
      $data= array('username' => $user_host->name,
                   'email' => $user_host->email,
                   'pdf_file' => $pdf_file);
      Mail::send('mails.trade',$data,function($message) use ($data){
        $message->to($data['email'],$data['username'])->subject('Your trade has been started')->attach($data['pdf_file']);
      });
      $data2= array('username' => $user_target->name,
                   'email' => $user_target->email,
                   'pdf_file' => $pdf_file);
      Mail::send('mails.trade',$data2,function($message) use ($data2){
        $message->to($data2['email'],$data2['username'])->subject('Your trade has been started')->attach($data2['pdf_file']);
      });
      return response()->json(['success'=>'Success']);
    }
    public function cancel(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $tradde_id=$request->tradde_id;
      $comments=$request->comments;
      $fairness=$request->fairness;
      $description=$request->description;
      $utility=$request->utility;
      $satisfied=$request->satisfied;
      $honesty=$request->honesty;
      $qualify=round((($fairness+$description+$utility+$satisfied+$honesty)*10)/50);
      $trade = DB::table('traddes')->where('id','=',$tradde_id)->update(['status'=>3]);
      $trd = DB::table('traddes')->where('id','=',$tradde_id)->first();
      $count = DB::table('traddes')->where('id','=',$tradde_id)->where('host_user_id','=',$iduser)->count();
      if($count>0){
        $qlf = DB::table('qualifies')->insert(['tradde_id'=>$tradde_id,'comments'=>$comments,'qualify'=>$qualify,'user_id'=>$trd->target_user_id,'fairness'=>$fairness,'description'=>$description,'value'=>$utility,'satisfied'=>$satisfied,'honesty'=>$honesty]);
      }
      else{
        $qlf = DB::table('qualifies')->insert(['tradde_id'=>$tradde_id,'comments'=>$comments,'qualify'=>$qualify,'user_id'=>$trd->host_user_id,'fairness'=>$fairness,'description'=>$description,'value'=>$utility,'satisfied'=>$satisfied,'honesty'=>$honesty]);
      }
      DB::table('notifications')->insert(['user_id' => $trd->host_user_id, 'type_id' => 3,'product_id' => $trd->product_id]);
      DB::table('notifications')->insert(['user_id' => $trd->target_user_id, 'type_id' => 3,'product_id' => $trd->product_id]);
      return response()->json(['success'=>'Success']);
    }
    public function confirm(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $tradde_id=$request->tradde_id;
      $comments=$request->comments;
      $fairness=$request->fairness;
      $description=$request->description;
      $utility=$request->utility;
      $satisfied=$request->satisfied;
      $honesty=$request->honesty;
      $qualify=round((($fairness+$description+$utility+$satisfied+$honesty)*10)/50);
      $trd = DB::table('traddes')->where('id','=',$tradde_id)->first();
      $trade = DB::table('traddes')->where('id','=',$tradde_id)->update(['status'=>8]);
      $count = DB::table('traddes')->where('id','=',$tradde_id)->where('host_user_id','=',$iduser)->count();
      if($count>0){
        $qlf = DB::table('qualifies')->insert(['tradde_id'=>$tradde_id,'comments'=>$comments,'qualify'=>$qualify,'user_id'=>$trd->target_user_id,'fairness'=>$fairness,'description'=>$description,'value'=>$utility,'satisfied'=>$satisfied,'honesty'=>$honesty]);
      }
      else{
        $qlf = DB::table('qualifies')->insert(['tradde_id'=>$tradde_id,'comments'=>$comments,'qualify'=>$qualify,'user_id'=>$trd->host_user_id,'fairness'=>$fairness,'description'=>$description,'value'=>$utility,'satisfied'=>$satisfied,'honesty'=>$honesty]);
      }
      DB::table('notifications')->insert(['user_id' => $trd->host_user_id, 'type_id' => 6,'product_id' => $trd->product_id]);
      DB::table('notifications')->insert(['user_id' => $trd->target_user_id, 'type_id' => 6,'product_id' => $trd->product_id]);
      return response()->json(['success'=>'Success']);
    }    
    public function finish(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $tradde_id=$request->tradde_id;
      $comments=$request->comments;
      $fairness=$request->fairness;
      $description=$request->description;
      $utility=$request->utility;
      $satisfied=$request->satisfied;
      $honesty=$request->honesty;
      $qualify=round((($fairness+$description+$utility+$satisfied+$honesty)*10)/50);
      $trade = DB::table('traddes')->where('id','=',$tradde_id)->update(['status'=>7]);
      $trd = DB::table('traddes')->where('id','=',$tradde_id)->first();
      $count = DB::table('traddes')->where('id','=',$tradde_id)->where('host_user_id','=',$iduser)->count();
      if($count>0){
        $qlf = DB::table('qualifies')->insert(['tradde_id'=>$tradde_id,'comments'=>$comments,'qualify'=>$qualify,'user_id'=>$trd->target_user_id,'fairness'=>$fairness,'description'=>$description,'value'=>$utility,'satisfied'=>$satisfied,'honesty'=>$honesty]);
      }
      else{
        $qlf = DB::table('qualifies')->insert(['tradde_id'=>$tradde_id,'comments'=>$comments,'qualify'=>$qualify,'user_id'=>$trd->host_user_id,'fairness'=>$fairness,'description'=>$description,'value'=>$utility,'satisfied'=>$satisfied,'honesty'=>$honesty]);
      }
      DB::table('notifications')->insert(['user_id' => $trd->host_user_id, 'type_id' => 4,'product_id' => $trd->product_id]);
      DB::table('notifications')->insert(['user_id' => $trd->target_user_id, 'type_id' => 4,'product_id' => $trd->product_id]);
    }    
    public function GetPartners(){
      $iduser = Auth::id();
      $users=[];
      $host_users = DB::table('traddes')->where('target_user_id','=',$iduser)->select('traddes.host_user_id as id')->get();
      if(!empty($host_users)){
        foreach ($host_users as $key) {
          $users[]=$key->id;
        }
      }
      $target_users = DB::table('traddes')->where('host_user_id','=',$iduser)->select('traddes.target_user_id as id')->get();
      if(!empty($target_users)){
        foreach ($target_users as $key) {
          $users[]=$key->id;
        }
      }
      $all_users = DB::table('users')->join('ident_images', 'ident_images.user_id', '=', 'users.id')->select('users.id as id','users.name as name','ident_images.image_url as image_url')->where('ident_images.ident_type','=',4)->whereIn('users.id',$users)->groupBy('users.id','users.name','ident_images.image_url')->get();
      return response()->json($all_users);
    }
    public function GetTrades()
    {
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=DB::table('traddes')->where('host_user_id','=',$iduser)->where('status','<',3)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=DB::table('traddes')->where('target_user_id','=',$iduser)->where('status','<',3)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
        }
      }      
      $product = DB::table('products')
        ->join('traddes', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
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
                 'status_trades.name as status_name',
                 'product_images.image_url as image_url',
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')->whereIn('traddes.id',$trd)->limit(15)->get();
        return response()->json($product);
    }
    public function GetAllMyTrades()
    {
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=DB::table('traddes')->where('host_user_id','=',$iduser)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=DB::table('traddes')->where('target_user_id','=',$iduser)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $product = DB::table('products')
        ->join('traddes', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
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
                 'status_trades.name as status',
                 'product_images.image_url as image_url',
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category')
        ->whereIn('traddes.id',$trd)->paginate(15);
        return view('trades.allmytrades',['TradeValues' => json_encode($product)]);
    }
    public function GetAllTrades()
    {
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
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
                     'categories.name as category',
                     'status_trades.name as status_name')->paginate(6);
        return view('content.dashboard',['TradeValues' => json_encode($product)]); 
    }
    public function GetTrader($id){
      $user = DB::table('users')
              ->join('registrations', 'registrations.user_id', '=', 'users.id')
              ->select('users.id as user_id','users.name as name', 'users.email as email', 'users.phone as phone','registrations.address as address')->where('users.id','=',$id)->first();
      return response()->json($user);
    }
    public function GetTraderAvatar($id){
      $image = DB::table('ident_images')->where('user_id','=',$id)->where('ident_type','=',4)->first();
      return response()->json($image);        
    }
    public function GetTraderTrades($id){
      $usr= User::where('id', $id)->first();
      $trd=[];
      $host_trades=DB::table('traddes')->where('host_user_id','=',$usr->id)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=DB::table('traddes')->where('target_user_id','=',$usr->id)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
        }
      }      
      $product = DB::table('products')
        ->join('traddes', 'traddes.product_id', '=', 'products.id')
        ->join('product_images', 'products.image_id', '=', 'product_images.id')
        ->join('categories', 'products.category_id', '=', 'categories.id')
        ->join('status_trades', 'traddes.status', '=', 'status_trades.id')
        ->join('registrations','traddes.host_user_id','=','registrations.user_id')
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
                 'registrations.firstname as firstname',
                 'registrations.lastname as lastname',
                 'registrations.email as email',
                 'registrations.phone as phone',
                 'categories.name as category',
                 'status_trades.name as status_name')
        ->whereIn('traddes.id',$trd)->get();
        return response()->json($product);
    }
    public function GetOffer(){
      $types = DB::table('type_offers')->get();
      return response()->json($types);
    }
    public function GetTime(){
      $types = DB::table('time_services')->get();
      return response()->json($types);
    }
    public function GetInProgress(){
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=DB::table('traddes')->where('host_user_id','=',$iduser)->where('status','=',2)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=DB::table('traddes')->where('target_user_id','=',$iduser)->where('status','=',2)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
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
                     'categories.name as category')->whereIn('traddes.id',$trd)->get();
          return response()->json($product);
    }
    public function CountInProgress(){
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=DB::table('traddes')->where('host_user_id','=',$iduser)->where('status','=',2)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=DB::table('traddes')->where('target_user_id','=',$iduser)->where('status','=',2)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $product = DB::table('products')
            ->join('traddes', 'traddes.product_id', '=', 'products.id')
            ->join('product_images', 'products.image_id', '=', 'product_images.id')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('status_trades', 'traddes.status', '=', 'status_trades.id')->whereIn('traddes.id',$trd)->count();
          return response()->json($product);      
    }
    public function GetCancelled(){
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=DB::table('traddes')->where('host_user_id','=',$iduser)->where('status','=',3)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=DB::table('traddes')->where('target_user_id','=',$iduser)->where('status','=',3)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
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
                     'categories.name as category')->whereIn('traddes.id',$trd)->get();
          return response()->json($product);
    }
    public function GetCompleted(){
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $trd=[];
      $host_trades=DB::table('traddes')->where('host_user_id','=',$iduser)->where('status','=',4)->get();
      if(!empty($host_trades)){
        foreach ($host_trades as $key) {
          $trd[]=$key->id;
        }
      }
      $target_trades=DB::table('traddes')->where('target_user_id','=',$iduser)->where('status','=',4)->get();
      if(!empty($target_trades)){
        foreach ($target_trades as $key) {
          $trd[]=$key->id;
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
                     'categories.name as category')->whereIn('traddes.id',$trd)->get();
          return response()->json($product);
    }        
    public function GetConfirmed($tradde){
      $iduser = Auth::id();
      $trd = DB::table('traddes')->where('id','=',$tradde)->first();
      $count = DB::table('traddes')->where('id','=',$tradde)->where('host_user_id','=',$iduser)->count();
      if($count>0){
        $trdd = DB::table('qualifies')->where('tradde_id','=',$tradde)->where('user_id','=',$trd->target_user_id)->first();
      }
      else{
        $trdd = DB::table('qualifies')->where('tradde_id','=',$tradde)->where('user_id','=',$trd->host_user_id)->first();
      }      
      return response()->json($trdd);
    }
    public function GetHostQualify(){
      $iduser = Auth::id();
      $qualify = DB::table('qualifies')->where('user_id','=',$iduser)->avg('qualify');
      $rounded=round($qualify, 0);
      return response()->json($rounded);
    }
    public function GetQualify($user){
      $qualify = DB::table('qualifies')->where('user_id','=',$user)->avg('qualify');
      $rounded=round($qualify, 0);
      return response()->json($rounded);
    }
    public function GetQualifyStatus($user_id,$trade_id){
      $qualify = DB::table('qualifies')->where('tradde_id','=',$trade_id)->where('user_id','=',$user_id)->count();
      return response()->json($qualify);
    }
    public function GetQualifyTrade($user_id,$trade_id){
      $qualify = DB::table('qualifies')->where('tradde_id','=',$trade_id)->where('user_id','=',$user_id)->avg('qualify');
      $rounded=round($qualify, 0);
      return response()->json($rounded);
    }    
    public function MyComments(){
      $iduser = Auth::id();
      $qualify = DB::table('qualifies')->join('users', 'users.id', '=', 'qualifies.user_id')
        ->select('qualifies.id as id',
          'qualifies.comments as comment',
          'users.name as name',
          'qualifies.qualify as qualify')->where('user_id','=',$iduser)->limit(5)->get();
      return response()->json($qualify);      
    }
    public function GetTradesPublished(){
      $iduser = Auth::id();
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
                     'products.description as description',
                     'product_images.image_url as image_url',
                     'categories.name as category',
                     'users.email as user_email',
                     'type_products.name as type_product')->where('traddes.status','=',1)->get();
      return response()->json($product_category);
    }
    public function GetBySeed(){
      $iduser = Auth::id();
      $trd=[];
      $seed=DB::table('seeds')->where('user_id','=',$iduser)->get();
      if(!empty($seed)){
        foreach ($seed as $key) {
          $trd[]=$key->category_id;
        }
      }
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
                     'products.description as description',
                     'product_images.image_url as image_url',
                     'categories.name as category',
                     'users.email as user_email',
                     'type_products.name as type_product')->whereIn('products.category_id',$trd)->get();
      return response()->json($product_category);
    }
    public function downloadPDF($tradde_id)
    {
      
      $iduser = Auth::id();
      $usr= User::where('id', $iduser)->first();
      $agreement=DB::table('agreements')->where('tradde_id','=',$tradde_id)->first();
      $offer=DB::table('products')->where('id','=',$agreement->offer)->first();
      $exchange=DB::table('products')->where('id','=',$agreement->exchange)->first();
      $user_offer=DB::table('users')->where('id','=',$offer->user_id)->first();
      $user_exchange=DB::table('users')->where('id','=',$exchange->user_id)->first();
      $time_services=DB::table('time_services')->where('id','=',$agreement->time_exchange)->first();
      $starting_at=explode('-', $agreement->starting_at);
      $end_at=explode('-', $agreement->end_at);
      $time=$agreement->time_offer;
      $day = strftime("%d",$time);
      $month =strftime("%m",$time);
      $yyyy= strftime("%Y",$time);
      $starting_at_day = $starting_at[2];
      $starting_at_month = $starting_at[1];
      $starting_at_yyyy= $starting_at[0];
      $end_at_day = $end_at[2];
      $end_at_month = $end_at[1];
      $end_at_yyyy= $end_at[0];
      $user_offer_registration=DB::table('registrations')->where('user_id','=',$offer->user_id)->first();
      $user_exchange_registration=DB::table('registrations')->where('user_id','=',$exchange->user_id)->first();
      $data = [
        'titulo' => 'Styde.net',
        'path' => public_path('fonts/0fac23294cabd9471f8ca7816bf12eae.ttf'),
        'ufm' => storage_path('app/public/fonts/0fac23294cabd9471f8ca7816bf12eae.ufm'),
        'starting_at_day' => $starting_at_day,
        'starting_at_month' => $starting_at_month,
        'starting_at_yyyy' => $starting_at_yyyy,
        'day' => $day,
        'month' => $month,
        'yyyy' => $yyyy,
        'end_at_day' => $end_at_day,
        'end_at_month' => $end_at_month,
        'end_at_yyyy' => $end_at_yyyy,        
        'user_offer_name' => $user_offer->name,
        'user_offer_email' => $user_offer->email,
        'user_offer_phone' => $user_offer->phone,
        'user_offer_address' => $user_offer_registration->address,
        'offer_type' => $offer->type_id,
        'exchange_type' => $exchange->type_id,
        'offer' => $offer->name,
        'exchange' => $exchange->name,        
        'user_exchange_name' => $user_exchange->name,
        'user_exchange_email' => $user_exchange->email,
        'user_exchange_phone' => $user_exchange->phone,
        'user_exchange_address' => $user_exchange_registration->address,
        'time_services' => $time_services->name,
      ];
      return \PDF::loadView('pdf.barteragreement', $data)->setOptions(['dpi' => 150, 'defaultFont' => 'futura', 'chroot' => public_path()])
        ->setPaper('a4', 'portrait')->download('barteragreement.pdf');
    }
    public function GetFullTrades(){
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
                     'categories.name as category',
                     'status_trades.name as status_name')->get();
        return response()->json($product);
    }
    public function GetTimeServices(){
          $product = DB::table('time_services')->get();
        return response()->json($product);
    }
    public function mytrades()
    {
      $TradeValues="";
      return view('content.dashboard',['TradeValues' => $TradeValues]); 
    }
}
