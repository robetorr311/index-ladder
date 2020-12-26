<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tradde extends Model
{
    use HasFactory;
    protected $fillable = ['host_user_id','tradde_number','target_user_id','product_id','status','category_id','exchange_id','ex_category_id'];
}
