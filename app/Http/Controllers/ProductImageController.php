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
use Image;

class ProductImageController extends Controller
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
    public function upload(Request $request){
      $iduser = Auth::id();
      $upload_path = public_path('uploads/products');
      $URL= route('welcome').'/uploads/products' ;
      $file_name = $request->file->getClientOriginalName();
      $file_type = $request->file->getClientOriginalExtension();
      $file_size = $request->file->getClientOriginalExtension();
      $type=$request->type;
      $image = $request->file('file');
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
      $img = Image::make($image->path());
      $img->resize(300, 240, function ($constraint) {
          //$constraint->aspectRatio();
          $constraint->upsize();
      })->save($upload_path.'/'.$generated_new_name);
      $token=csrf_token();
      $img = DB::table('product_images')->insertGetId([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'user_id' => $iduser,
                'token' => $token,
                'trade_type'=> $type]);
      $images = DB::table('product_images')->where('trade_type','=', $type)->where('token','=', $token)->get();
      return response()->json($images);
    }        
    public function GetUploaded($type){
      $token=csrf_token();  
      $images = DB::table('product_images')->where('trade_type','=', $type)->where('token','=', $token)->get();
      return response()->json($images);
    }
    public function GetEditPictures($id,$type){
      $token=csrf_token();
      $img=Product_image::where('product_id',$id)->update(['token' => $token]);
      $images = DB::table('product_images')->where('trade_type','=', $type)->where('token','=', $token)->get();
      return response()->json($images);
    }    
    public function imagedelete(Request $request){
      $token=csrf_token();
      $deletedimg = Product_image::where('id',$request->image_id)->delete();
      $images = DB::table('product_images')->where('trade_type','=', $request->type)->where('token','=', $token)->get();
      return response()->json($images);           
    }
    public function IsUploaded($type){
      $token=csrf_token();
      $images = DB::table('product_images')->where('trade_type','=', $type)->where('token','=', $token)->count();
      return response()->json(['count' => $images]);           
    }
    public function GetImages(){
      $img= DB::table('product_images')->get();
      return response()->json($img);
    }
}
