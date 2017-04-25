<?php

    $country_code   = "PT";
    $city           = "porto";
    $request_type   = "forecast";
    $json           = file_get_contents('http://api.openweathermap.org/data/2.5/'.$request_type.'?q='.$city.','.$country_code.'&APPID=2c704c60875ec243c23dc8e95e35fd47&units=metric');
    $weather_data   = json_decode($json);
    echo "<pre>";
    print_r($weather_data);
    echo "</pre>";
?>
