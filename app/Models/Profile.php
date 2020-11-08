<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Profile extends Model
{
    use HasFactory;
    protected $fillable = ['user_id',
            'license_id',
            'card_id',
            'photo_id',
            'comments',
            'registration_id',
            'billing_id'];    
}
