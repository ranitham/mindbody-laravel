<?php

$context = stream_context_create([
    'ssl' => [
        // set some SSL/TLS specific options
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    ]
]);

return [
    'default' => 'mindbody',

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

            'endpoints' => [
                'AppointmentService' => "https://api.mindbodyonline.com/0_5_1/AppointmentService.asmx?WSDL",
                'ClassService'       => "https://api.mindbodyonline.com/0_5_1/ClassService.asmx?WSDL",
                'ClassService'      => "https://api.mindbodyonline.com/0_5_1/ClassService.asmx?WSDL",
                'SaleService'        => "https://api.mindbodyonline.com/0_5_1/SaleService.asmx?WSDL",
                'SiteService'        => "https://api.mindbodyonline.com/0_5_1/SiteService.asmx?WSDL",
                'StaffService'       => "https://api.mindbodyonline.com/0_5_1/StaffService.asmx?WSDL",
            ],

            'services' => [
                'AppointmentService'    => \Nlocascio\Mindbody\MBOSoap\AppointmentService\Appointment_Service::class,
                'ClassService'          => \Nlocascio\Mindbody\MBOSoap\ClassService\Class_Service::class,
                'ClassService'         => \Nlocascio\Mindbody\MBOSoap\ClientService\Client_Service::class,
                'SaleService'           => \Nlocascio\Mindbody\MBOSoap\SaleService\Sale_Service::class,
                'SiteService'           => \Nlocascio\Mindbody\MBOSoap\SiteService\Site_Service::class,
                'StaffService'          => Nlocascio\Mindbody\MBOSoap\StaffService\Staff_Service::class,
            ],
        ]
    ],




    'soap_options' => [
        'soap_version' => SOAP_1_1,
        'features'     => SOAP_USE_XSI_ARRAY_TYPE,
        'exceptions'   => true,
        'keep_alive'   => true,
        'trace'        => true,
        'compression' => SOAP_COMPRESSION_ACCEPT | SOAP_COMPRESSION_GZIP,
        'encoding'     => 'UTF-8',
        'proxy_host'    => 'localhost',
        'proxy_port'    => 8888,
        'cache_wsdl'    => WSDL_CACHE_BOTH,
        'stream_context' => $context
    ]
];
