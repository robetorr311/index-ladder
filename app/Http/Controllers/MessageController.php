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


class MessageController extends Controller
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
    public function store(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $message=$request->message;
      $product_id=$request->product_id;
      $trade = DB::table('traddes')->where('product_id','=',$product_id)->first();
      DB::table('messages')->insert(['user_id' => $iduser, 'message' => $message,'tradde_id' => $trade->id]);
      $messages = DB::table('messages')->where('tradde_id','=',$trade->id)->get();
      return response()->json($messages);
    }
    public function delete(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $message_id=$request->message_id;
      $product_id=$request->product_id;
      $trade = DB::table('traddes')->where('product_id','=',$product_id)->first();      
      DB::table('messages')->where('id', '=', $message_id)->delete();
      $messages = DB::table('messages')->where('tradde_id','=',$trade->id)->get();
      return response()->json($messages);
    }
    public function SendResponse(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $message=$request->message;
      $product_id=$request->product_id;
      $parent_id=$request->parent_id;
      $trade = DB::table('traddes')->where('product_id','=',$product_id)->first();
      DB::table('messages')->insert(['user_id' => $iduser, 'message' => $message,'tradde_id' => $trade->id,'parent_id' => $parent_id]);
      $messages = DB::table('messages')->where('tradde_id','=',$trade->id)->get();
      return response()->json($messages);
    }     
    public function GetMessages($product){
      $iduser = Auth::id();
      $trade = DB::table('traddes')->where('product_id','=',$product)->first();
      $messages = DB::table('messages')->where('tradde_id','=',$trade->id)->get();
      return response()->json($messages);        
    }
    public function GetNotifications(){
      $iduser = Auth::id();
      $notification = DB::table('notifications')->join('type_notifications', 'notifications.type_id', '=', 'type_notifications.id')
      ->select('notifications.*', 'type_notifications.*')->where('user_id','=',$iduser)->where('view','=',0)->get();
      return response()->json($notification);      
    }
    public function SetView(Request $request){
      $iduser = Auth::id();
      $token=csrf_token();
      $product_id=$request->product_id;
      $trade = DB::table('notifications')->where('product_id','=',$product_id)->where('user_id','=',$iduser)->update(['view' => 1]);
      return response()->json(['Success'=> 'Success']);
    }
    public function update(Request $request, message $message)
    {
        //
    }


}
