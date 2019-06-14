<?php
//$woeid = 638242;
$weather = file_get_contents('https://www.metaweather.com/api/location/638242');
// oder search/?query=Berlin');
$weather = json_decode($weather, true);


$weather = $weather["consolidated_weather"][0];
$min_temp = $weather["min_temp"];
$min_temp = round($min_temp);
$max_temp = $weather["max_temp"];
$max_temp = round($max_temp);

$today_state = $weather["weather_state_abbr"] . ".svg";

$weather_abbr = $weather["weather_state_abbr"];


function weather_tagline($a){

   if ($a == "c") {
    echo "love is in the air";
  }
  elseif ($a == "lc") {
    echo "ganz ok";
  }
  else {
    echo "Bojour tristesse";
      }
  }
