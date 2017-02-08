<?php
echo getenv("WUKEY");
echo "\n";
$key = getenv("WUKEY");
$city = "kinderhook";
$state= "il";

// http://api.wunderground.com/api/q3420464b9d7ac3d2/conditions/q/CA/San_Francisco.json
$query = "http://api.wunderground.com/api/$key/conditions/q/$state/$city.json";
echo "$query\n";
$jsonString = file_get_contents($query);
echo "$jsonString\n";
$parsed_json = json_decode($jsonString);
  $location = $parsed_json->{'location'}->{'city'};
  $temp_f = $parsed_json->{'current_observation'}->{'temp_f'};
  echo "Current temperature in ${location} is: ${temp_f}\n";
?>