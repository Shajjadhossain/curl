<?php
/**
 * Created by PhpStorm.
 * User: UITS-Shajjad
 * Date: 2/26/2017
 * Time: 1:31 PM
 */


//$url="http://localhost/curl/data.php";

$url="https://localhost/curl/data.php?action=getThreads&hash=123fajwersa&node_id=4&order_by=post_date&order=desc&limit=1&grab_content&content_limit=1";

//  Initiate curl
$ch = curl_init();
// Disable SSL verification
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
// Will return the response, if false it print the response
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
// Set the url
curl_setopt($ch, CURLOPT_URL,$url);
// Execute
$result=curl_exec($ch);
// Closing
curl_close($ch);

// Will dump a beauty json :3
var_dump(json_decode($result, true));

