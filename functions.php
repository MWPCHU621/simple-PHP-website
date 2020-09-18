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

?>