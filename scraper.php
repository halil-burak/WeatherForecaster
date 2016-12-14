<?php
	$city = $_GET['city'];
	$city = str_replace(" ", "", $city);
	$url = "http://www.weather-forecast.com/locations/".$city."/forecasts/latest";
	$contents = file_get_contents($url);
	preg_match('/3 Day Weather Forecast Summary:(.*?)<\/span>/s', $contents, $matches);
	print_r($matches[0]);
?>