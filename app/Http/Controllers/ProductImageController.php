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
      $image = $request->file('file');
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
      $img = Image::make($image->path());
      $img->resize(340, 255, function ($constraint) {
          $constraint->aspectRatio();
      })->save($upload_path.'/'.$generated_new_name);
      $token=csrf_token();
      $img = Product_image::create([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'user_id' => $iduser,
                'token' => $token 
                ]);
      $img->save();
      return response()->json(['token'=>$token]);           
    }        
    public function GetUploaded(){
      $token=csrf_token();  
      $images = DB::table('product_images')->where('token','=', $token)->get();
      return response()->json($images);
    }
    public function GetEditPictures($id){
      $token=csrf_token();
      $img=Product_image::where('product_id',$id)->update(['token' => $token]);
      $images = DB::table('product_images')->where('token','=', $token)->get();
      return response()->json($images);      
    }    
    public function imagedelete(Request $request){
      $deletedimg = Product_image::where('id',$request->image_id)->delete();
      return response()->json(['success'=>'Success']);           
    }    
}
