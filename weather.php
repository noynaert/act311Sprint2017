<?php
echo "\n\n\n---------------------\n\n";
$key = getenv("WUKEY");
echo "$key\n";
echo "Enter a city:\n";
//$city = readline();
$city = "kinderhook";
echo "You entered $city\n";
$state = "il";
$query = "http://api.wunderground.com/api/$key/geolookup/conditions/q/$state/$city.json";
echo "$query\n";

$json_string = file_get_contents($query);
echo "$json_string\n";
$weatherObject = json_decode($json_string);
$temp_f = $weatherObject->{'current_observation'}->{'temp_f'};
$wind   = $weatherObject->{'current_observation'}->{'wind_string'};
$display_location = $weatherObject->{'current_observation'}->{'display_location'}->{'full'};
echo "The current temperature is $temp_f\n";
echo "Showing weather for $display_location\n";
echo "Wind: $wind\n";

?>