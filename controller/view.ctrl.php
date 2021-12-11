<?php

    $startDate = $_GET['start'];
    $endDate = $_GET['end'];

    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => "https://earthquake.usgs.gov/fdsnws/event/1/query?format=geojson&starttime=$startDate&endtime=$endDate",
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => '',
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 0,
        CURLOPT_FOLLOWLOCATION => true,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => 'GET',
        // CURLOPT_HTTPHEADER => array(
        //     'content-type: application/json'
        // ),
        ));
    $response = curl_exec($curl);
    
    curl_close($curl);
    $show = json_decode($response);
