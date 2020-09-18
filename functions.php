<?php

function getAPICall($website) {
    $init = curl_init();

    // Set the url
    curl_setopt($init, CURLOPT_URL, $website);

    // Set the result output to be a string.
    curl_setopt($init, CURLOPT_RETURNTRANSFER, true);
    
    $output = curl_exec($init);

    $result = json_decode($output);


    curl_close($init);

    return $result;
}

function postAPICall($website, $data) {
    $postInit = curl_init();

    //set URL
    curl_setopt($postInit, CURLOPT_URL, $website);

    //set data
    curl_setopt($postInit, CURLOPT_POST, 1);
    if($data) {
        curl_setopt($postInit, CURLOPT_POSTFIELDS, $data);
    }
    
    //set other options
    curl_setopt($postInit, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Contetn-Length: ' . strlen($data)
    ));
    curl_setopt($postInit, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($postInit, CURLOPT_FAILONERROR, true);


    //execution
    $result = curl_exec($postInit);

    curl_close($postInit);

    return $result;
}


?>