<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tradder extends Model
{

    use HasFactory;
    protected $fillable = ['user_id','photo','idcard','driverlicense','photo','phone','email'];
}
