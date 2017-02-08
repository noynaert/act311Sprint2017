<?php
class Vehicle{
    function Vehicle($cyl, $whl){
        $this->wheels = $whl;
        $this->cylinders = $cyl;
    }
}

$truck = new Vehicle(8,4);
$motorcycle = new Vehicle(4,2);

echo $truck->cylinders."\n";
echo $truck->wheels."\n";
echo $motorcycle->wheels."\n";

$json_string = json_encode($truck);
echo "As a Json String: \n$json_string\n";

$json_string = json_encode($truck,JSON_PRETTY_PRINT);
echo "\nAs a Pretty Json String: \n$json_string\n";
?>