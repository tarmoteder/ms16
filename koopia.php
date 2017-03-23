<?php

require('/functions/function.php');
// home();

function koopia($site){
    
    $url = curl_init();
    curl_setopt($url, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($url, CURLOPT_URL, $site);
    $data = curl_exec($url);
    curl_close($url);
    return $data;
}

echo koopia('http://www.tptlive.ee');

?>