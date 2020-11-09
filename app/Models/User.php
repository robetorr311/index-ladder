<?php

namespace App\Models;

use App\Http\Controllers\Twilio;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'role_id',
        'remember_token',
        'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'phone_verified_at' => 'datetime'
    ];
    /**
     * Determine if the user has verified their phone.
     *
     * @return bool
     */
    public function hasVerifiedPhone()
    {
        return ! is_null($this->phone_verified_at);
    }
 
    /**
     * Mark the given user's phone as verified.
     *
     * @return bool
     */
    public function markPhoneAsVerified()
    {
        return $this->forceFill(['verification_code' => $this->null, 'phone_verified_at' => $this->freshTimestamp(),])->save();
    }
     
    /**
     * Send the sms verification code.
     *
     * @return void
     */
    public function sendPhoneVerificationNotification()
    {
        $verification_code = rand(100000,999999);
        Twilio::sendMessage($verification_code, $this->phone);
        return $this->forceFill(['verification_code' => $verification_code, 'phone_verified_at' => $this->null,])->save();
    }    
}
