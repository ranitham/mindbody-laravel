<?php

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
                'ClientService'      => "https://api.mindbodyonline.com/0_5_1/ClientService.asmx?WSDL",
                'SaleService'        => "https://api.mindbodyonline.com/0_5_1/SaleService.asmx?WSDL",
                'SiteService'        => "https://api.mindbodyonline.com/0_5_1/SiteService.asmx?WSDL",
                'StaffService'       => "https://api.mindbodyonline.com/0_5_1/StaffService.asmx?WSDL",
            ],

            'services' => [
                'AppointmentService'    => \Nlocascio\Mindbody\MBOSoap\Appointment_Service::class,
                'ClassService'          => \Nlocascio\Mindbody\MBOSoap\Class_Service::class,
                'ClientService'         => \Nlocascio\Mindbody\MBOSoap\Client_Service::class,
                'SaleService'           => \Nlocascio\Mindbody\MBOSoap\Sale_Service::class,
                'SiteService'           => \Nlocascio\Mindbody\MBOSoap\Site_Service::class,
                'StaffService'          => Nlocascio\Mindbody\MBOSoap\Staff_Service::class,
            ],
        ]
    ],
];
