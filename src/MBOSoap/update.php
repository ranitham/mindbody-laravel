<?php
include_once "../../vendor/autoload.php";

$appointmentServiceWSDL = "https://api.mindbodyonline.com/0_5_1/AppointmentService.asmx?WSDL";
$classServiceWSDL = "https://api.mindbodyonline.com/0_5_1/ClassService.asmx?WSDL";
$clientServiceWSDL = "https://api.mindbodyonline.com/0_5_1/ClassService.asmx?WSDL";
$saleServiceWSDL = "https://api.mindbodyonline.com/0_5_1/SaleService.asmx?WSDL";
$siteServiceWSDL = "https://api.mindbodyonline.com/0_5_1/SiteService.asmx?WSDL";
$staffServiceWSDL = "https://api.mindbodyonline.com/0_5_1/StaffService.asmx?WSDL";
$services = array(
    'AppointmentService' => $appointmentServiceWSDL,
    'ClassService' => $classServiceWSDL,
    'ClassService' => $clientServiceWSDL,
    'SaleService' => $saleServiceWSDL,
    'SiteService' => $siteServiceWSDL,
    'StaffService' => $staffServiceWSDL
);

foreach ($services as $service) {
    $generator = new \Wsdl2PhpGenerator\Generator();
    $serviceName = str_replace(".asmx?WSDL", "", str_replace("https://api.mindbodyonline.com/0_5_1/", "", $service));
    $generator->generate(
        new \Wsdl2PhpGenerator\Config(array(
            'inputFile' => $service,
            'outputDir' => __DIR__ . "/" . $serviceName,
            'namespaceName' => "Nlocascio\\Mindbody\\MBOSoap\\" . $serviceName
        ))
    );
    echo $serviceName. ": done \r\n";
}