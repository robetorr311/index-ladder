<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Mailgun, Postmark, AWS and more. This file provides the de facto
    | location for this type of information, allowing packages to have
    | a conventional file to locate the various service credentials.
    |
    */

    'mailgun' => [
        'domain' => env('MAILGUN_DOMAIN'),
        'secret' => env('MAILGUN_SECRET'),
        'endpoint' => env('MAILGUN_ENDPOINT', 'api.mailgun.net'),
    ],

    'postmark' => [
        'token' => env('POSTMARK_TOKEN'),
    ],

    'ses' => [
        'key' => env('AWS_ACCESS_KEY_ID'),
        'secret' => env('AWS_SECRET_ACCESS_KEY'),
        'region' => env('AWS_DEFAULT_REGION', 'us-east-1'),
    ],
    'twilio' => [
        'account_sid' => env('AC45c7615c4ffc9aa921a152c25eb4ca1d'),
        'auth_token' => env('5b954c3d2ec4630f4c10c3d60837b905'),
        'phone' => env('+12058909484'),
    ],
    'stripe' => [
        'model' => App\Models\User::class,
        'key' => env('pk_test_51I6rk8IwloEcEGxLuFCGtGeMMBrieDxwLTx2qzxy2zFP8RtMtR4Oh8TMDafevEJpOfXEPUJQoLZn6YBCREwUIZLr00FC0zH1yN'),
        'secret' => env('sk_test_51I6rk8IwloEcEGxLYDWaJGO8e0TqXa031RofdKLtlakAIXpy3P7B8HoknKJy461anBiFdLFLnRCEaQFWRw9ZQbXu00qt7qai6h'),
    ],    
];
