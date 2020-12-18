<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tradde extends Model
{
    use HasFactory;
    protected $fillable = ['buy_id','tradde_number','sell_id','product_id','amount','status','item_description','title','category_id'];
}
