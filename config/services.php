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
    'link_assets_service' => env('LINK_ASSETS_SERVICE'),
    'link_user_service' => env('LINK_USER_SERVICE'),
    'link_hr_service' => env('LINK_HR_SERVICE'),
    'link_s3' => env('LINK_S3'),
    'folder' => env('FOLDER'),
    'visibility' => env('VISIBILITY'),
    'link_import_contract' => env('FILE_IMPORT_CONTRACT'),

    'ams_system' => [
        'token' => env('AMS_TOKEN'),
        'link' => env('AMS_LINK'),
    ]
];
