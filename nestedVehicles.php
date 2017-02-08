<?php

class Model{
     function Model($manufacturer, $make){
         $this->manufacturer = $manufacturer;
         $this->make = $make;     
     }
}

$myModel = new Model("Ford","F150");
echo $myModel->make."\n";

class Vehicle{
    function Vehicle($cyl, $whl,$model){
        $this->wheels = $whl;
        $this->cylinders = $cyl;
        $this->model = $model;
    }
}

$truck = new Vehicle(8,4, $myModel);
$motorcycle = new Vehicle(4,2, new Model("Harley","Sportster"));

echo $truck->cylinders."\n";
echo $truck->wheels."\n";
echo $motorcycle->wheels."\n";
echo "This is important.\n";
echo $truck->{'model'}->{'manufacturer'} ."\n";

$json_string = json_encode($truck);
echo "As a Json String: \n$json_string\n";

$json_string = json_encode($truck,JSON_PRETTY_PRINT);
echo "\nAs a Pretty Json String: \n$json_string\n";
?>