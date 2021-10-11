<?php

return [
    'default' => 'mindbody',
    'debug' => env('MINDBODY_DEBUG', false),

    'connections' => [
        'mindbody' => [
            'site_ids' => explode(',', env('MINDBODY_SITEIDS')),

            'source_credentials' => [
                'username' => env('MINDBODY_SOURCENAME'),
                'password' => env('MINDBODY_SOURCEPASSWORD'),
            ],

            // User credentials can be declared independently,
            // otherwise we'll use the MINDBODY default of pre-
            // pending the Source Username with an underscore.
            'user_credentials'   => [
                'username' => env('MINDBODY_USERNAME', '_' . env('MINDBODY_SOURCENAME')),
                'password' => env('MINDBODY_USERPASSWORD', env('MINDBODY_SOURCEPASSWORD')),
            ],

        ]
    ],
];
