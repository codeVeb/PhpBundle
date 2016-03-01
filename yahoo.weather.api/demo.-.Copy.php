<?php

#add class file in your code.
require_once('yahoo.weather.api.php');

#initiate class object
$yw = new yahooWeather(55949053);

echo '<pre>';

#get array of all weather report
print_r($yw->getAll());
#get title for weather report
print_r($yw->title());
#get last updated data/time
print_r($yw->lastBuild());
#get location parameters
print_r($yw->location());
#get units
print_r($yw->units());
#get wind report
print_r($yw->wind());
#get atmosphere report
print_r($yw->atmosphere());
#get sunset/sunrise report
print_r($yw->astronomy());
#get current report
print_r($yw->now());
#get forcast for 5 days
print_r($yw->forecast());
echo '</pre>';
#get copyright stamp
echo $yw->poweredBy();
?>