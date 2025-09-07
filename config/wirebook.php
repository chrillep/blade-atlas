<?php

// config for Arrgh11/WireBook
return [
    'enabled' => env('WIREBOOK_ENABLED', true),
    'discover' => [
        'paths' => [
            app_path('WireBook/Stories'),
        ],
    ],
    'globals' => [
        'layout' => 'wirebook::application.story',
    ],
    'show_tests' => false,
];
