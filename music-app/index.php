<?php
$callback_url   = "http://ws.audioscrobbler.com/2.0/?method=";
$method         = "artist.getinfo";
$query_param    = "artist";
$query_value    = "Metallica";
$json           = file_get_contents($callback_url.$method."&".$query_param."=".$query_value."&api_key=77fa5b581a0667780d62f2cdf6dec357&format=json");
$music_data     = json_decode($json);
echo "<pre>";
print_r($music_data->artist);
echo "</pre>";
 ?>
