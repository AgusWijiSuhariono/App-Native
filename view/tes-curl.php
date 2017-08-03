<?php
    $curl = curl_init();
    curl_setopt ($curl, CURLOPT_URL, "http://www.php.net");
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);

    $result = curl_exec ($curl);
    curl_close ($curl);
    print $result;
?>