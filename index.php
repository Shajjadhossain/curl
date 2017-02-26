<?php
/**
 * Created by PhpStorm.
 * User: UITS-Shajjad
 * Date: 2/26/2017
 * Time: 12:45 PM
 */
$url="http://localhost/curl/data.php";

$ch = curl_init();
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

