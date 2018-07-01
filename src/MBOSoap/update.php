<?php
/**
 * Original Author Famoser
 * https://github.com/famoser/mindbodyonline-api-php-wrapper
 */

include_once "../../vendor/autoload.php";

$appointmentServiceWSDL = "https://api.mindbodyonline.com/0_5_1/AppointmentService.asmx?WSDL";
$classServiceWSDL = "https://api.mindbodyonline.com/0_5_1/ClassService.asmx?WSDL";
$clientServiceWSDL = "https://api.mindbodyonline.com/0_5_1/ClientService.asmx?WSDL";
$saleServiceWSDL = "https://api.mindbodyonline.com/0_5_1/SaleService.asmx?WSDL";
$siteServiceWSDL = "https://api.mindbodyonline.com/0_5_1/SiteService.asmx?WSDL";
$staffServiceWSDL = "https://api.mindbodyonline.com/0_5_1/StaffService.asmx?WSDL";
$services = array(
    'AppointmentService' => $appointmentServiceWSDL,
    'ClassService' => $classServiceWSDL,
    'ClientService' => $clientServiceWSDL,
    'SaleService' => $saleServiceWSDL,
    'SiteService' => $siteServiceWSDL,
    'StaffService' => $staffServiceWSDL
);


foreach ($services as $service) {
    $generator = new \Wsdl2PhpGenerator\Generator();
    $serviceName = str_replace(".asmx?WSDL", "", str_replace("https://api.mindbodyonline.com/0_5_1/", "", $service));
    @$generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
            'inputFile' => $service,
            'outputDir' => __DIR__,
            'namespaceName' => "Nlocascio\\Mindbody\\MBOSoap",
            'sharedTypes' => true
        ))
    );

    echo $serviceName . ": done \r\n";
}