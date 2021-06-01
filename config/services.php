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

    'google' => [
        'client_id' => '765852453676-v90biorfn846gfi3kou25nc6lkhbhk4l.apps.googleusercontent.com',
        'client_secret' => 'IQsJHuFsO-1uU_4NVu3Y08Ns',
        'redirect' => 'http://127.0.0.1:8000/google/callback',
    ],

    'facebook' => [
        'client_id' => '#',
        'client_secret' => '#',
        'redirect' => 'http://127.0.0.1:8000/facebook/callback',
    ],

    'github' => [
        'client_id' => '6d707dd8fd4aa91b4d80',
        'client_secret' => '4b8aa18be43c0b2c7e9586bb429e14c7577abb9b',
        'redirect' => 'http://127.0.0.1:8000/github/callback',
    ],

];
