<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Application Name
    |--------------------------------------------------------------------------
    |
    | This value is the name of your application.
    |
     */

    'APP_TITLE' => 'Blog website',

    /*
    |--------------------------------------------------------------------------
    | Application URL
    |--------------------------------------------------------------------------
    |
    | You should set this to the root of your application.
    |
     */

    'BASE_URL' => 'http://localhost:8000',
    'BASE_DIR' => dirname(__DIR__),

    /*
    |--------------------------------------------------------------------------
    | Autoloaded Service Providers
    |--------------------------------------------------------------------------
    |
    | The service providers listed here will be automatically loaded on the
    | request to your application.
    |
     */

    'providers' => [
        \App\Providers\SessionProvider::class,
        \App\Providers\AppServiceProvider::class,
        \App\Providers\WidgetProvider::class,
    ],
];
