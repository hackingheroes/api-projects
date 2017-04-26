<?php
    $standings = false;
    $league= "serie-a"; // can be "premier-league", "serie-a", "liga", "seria-a-brasileiro" or "eredivisie"
    $uri = 'http://soccer.sportsopendata.net/v1/leagues/'. $league ."/seasons/16-17";
    if($standings){
        $uri = $uri . "/standings";
    }
    $reqPrefs['http']['method'] = 'GET';
    $stream_context = stream_context_create($reqPrefs);
    $response = file_get_contents($uri, false, $stream_context);
    $results = json_decode($response);
    echo "<pre>";
    print_r($results);
    echo "</pre>";
?>
