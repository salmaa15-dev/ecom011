<?php



return [



    'sandbox_client_id' => env('PAYPAL_SANDBOX_CLIENT_ID'),

    'sandbox_secret'    => env('PAYPAL_SANDBOX_SECRET'),



    // Live 

    'live_client_id'    => env('PAYPAL_LIVE_CLIENT_ID'),

    'live_secret'       => env('PAYPA_LIVE_SECRET'),



    // Paypal SDK Configuration

    'settings' => [

        // Mode (Live or sandBox)

        'mode' => env('PAYPAL_MODE', 'live'),



        //  Confuguration timout

        'http.ConnectionTimeOut'    => 3000,



        // Logs

        'log.LongEnabled'   => true,

        'log.FileName' => storage_path().'/logs/paypal.log',

        

        // level: DEBUG, INFO, WARN, ERROR

        'log.LogLevel'  => 'DEBUG'

    ]

];