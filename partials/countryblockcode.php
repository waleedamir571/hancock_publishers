<?php
// Get user IP address
$ip = $_SERVER['REMOTE_ADDR'];
// Using the API to get information about this IP
$details = json_decode(file_get_contents("http://www.geoplugin.net/json.gp?ip=$ip"));
// City
$city = $details->geoplugin_city;
// Using geoplugin to get the continent for this IP
$continent = $details->geoplugin_continentCode;
// And for the country
$country = $details->geoplugin_countryCode;
// Blocked countries
$blocked_countries = array("PK", "IN", "CN", "NGA");
// Check if the country is in the blocked list
if (in_array($country, $blocked_countries)) {
    header("Location: https://hancockpublishers.com/country-block.php");
    exit;
}

?>
