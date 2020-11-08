<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class User_image extends Model
{
    use HasFactory;
    protected $fillable = ['image_url','name','type','size','user_id'];    
}
