<?php

return [

    /*
    |--------------------------------------------------------------------------
    | LaravelGoogleKeywords Configuration
    |--------------------------------------------------------------------------
    |
    */
    'default' => [
        'startDate' => '3', //subMonth(3)
        'rowLimit' => 10000
    ],
    'websites' => [
        [
            'url' => '',
            'credentials' => storage_path('app/GOOGLE_FILE.json'),
        ],
    ],
    
];
