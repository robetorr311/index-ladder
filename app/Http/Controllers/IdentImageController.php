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

class IdentImageController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function picture(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $regis= Registration::where('user_id', $id)->first();
      $values=json_encode($regis);
      $upload_path = public_path('uploads/pictures');
      $URL= route('welcome').'/uploads/pictures' ;
      $file_name = $request->file->getClientOriginalName();
      $file_type = $request->file->getClientOriginalExtension();
      $file_size = $request->file->getClientOriginalExtension();
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension(); 
      $request->file->move($upload_path, $generated_new_name);
      $img = Ident_image::create([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'type' => $file_type,
                'size' => $file_type,
                'user_id' => $id,
                'ident_type' => 1 
                ]);
      $img->save();
    }
    public function license(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $regis= Registration::where('user_id', $id)->first();
      $values=json_encode($regis);
      $upload_path = public_path('uploads/licenses');
      $URL= route('welcome').'/uploads/licenses' ;
      $file_name = $request->file->getClientOriginalName();
      $file_type = $request->file->getClientOriginalExtension();
      $file_size = $request->file->getClientOriginalExtension();
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
      $request->file->move($upload_path, $generated_new_name);
      $img = Ident_image::create([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'type' => $file_type,
                'size' => $file_type,
                'user_id' => $id,
                'ident_type' => 2 
                ]);
      $img->save();  
    }
    public function card(Request $request)
    {
      $id = Auth::id();
      $usr= User::where('id', $id)->first();
      $usernameEnd=$usr->name;
      $logged_in=true;
      $regis= Registration::where('user_id', $id)->first();
      $values=json_encode($regis);
      $upload_path = public_path('uploads/cards');
      $URL= route('welcome').'/uploads/cards' ;
      $file_name = $request->file->getClientOriginalName();
      $file_type = $request->file->getClientOriginalExtension();
      $file_size = $request->file->getClientOriginalExtension();
      $generated_new_name = time() . '.' . $request->file->getClientOriginalExtension();
      $request->file->move($upload_path, $generated_new_name);
      $img = Ident_image::create([
                'image_url' => $URL. '/' . $generated_new_name ,
                'name' => $generated_new_name,
                'type' => $file_type,
                'size' => $file_type,
                'user_id' => $id,
                'ident_type' => 3 
                ]);
      $img->save();
    }
}
