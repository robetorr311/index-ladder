<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Twilio\Rest\Client;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use App\Models\Registration;
use App\Models\Product;
use App\Models\Product_image;
use App\Models\Tradde;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class Twilio extends Controller
{
    public static function sendMessage($message, $recipients)
    {
        $account_sid = config('services.twilio')['account_sid'];
        $auth_token = config('services.twilio')['auth_token'];
        $phone = config('services.twilio')['phone'];
        $twilio = new Client($account_sid, $auth_token);
        $twilio->messages->create($recipients, [
            'from' => $phone,
            'body' => $message
        ] );
    }
}
