<?php

$handle = curl_init();
 
$url = "https://jsonplaceholder.typicode.com/todos/1";
 
// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);
 
$output = curl_exec($handle);

$result = json_decode($output, true);

curl_close($handle);


 
// echo 'output is', $output;

// print $result;
// var_dump($result);
echo "THIS IS THE ARRAY DATA OF ONE DATA AFTER USING CURL TO FETCH 1 DATA \n\n";
print_r($result);


echo "\n\n THIS IS AFTER i PROCESS THE DATA AND TRY TO PRINT OUT ONLY THE VALUES AS HTML \n\n";

foreach($result as $item) {
    echo $item, '<br/>';
}


?>