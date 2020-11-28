<?php

use Nlocascio\Mindbody\MBOSoap\AutopaySchedule;

include_once "../vendor/autoload.php";


$ref = new ReflectionClass(AutopaySchedule::class);
$props = $ref->getProperties();

foreach ($props as $prop)
{
    if (preg_match('/@var\s+([^\s]+)/', $prop->getDocComment(), $matches)) {
        list(, $type) = $matches;
        if($type == "\Carbon\Carbon")
            $type = "datetime";
        if($type == "int")
            $type = "integer";

        print ('$table->'.$type . "('");
        print ($prop->getName() . "');\r\n");
    }
}
