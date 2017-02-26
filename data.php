<?php
/**
 * Created by PhpStorm.
 * User: UITS-Shajjad
 * Date: 2/26/2017
 * Time: 12:45 PM
 */

/*$jsonData = array(
    'username' => 'MyUsername',
    'password' => 'MyPassword'
);*/



//Encode the array into JSON.
//echo $jsonDataEncoded = json_encode($jsonData);

$url = 'http://api.brightcove.com/services/library?command=find_all_videos'.
    '&video_fields=thumbnailURL&token=0Z2dtxTdJAxtbZ-d0U7Bhio2V1Rhr5Iafl5FFtDPY8E.';

$curl_options = array(
    CURLOPT_URL => $url,
    CURLOPT_HEADER => 0,
    CURLOPT_RETURNTRANSFER => TRUE,
    CURLOPT_TIMEOUT => 0,
    CURLOPT_SSL_VERIFYPEER => 0,
    CURLOPT_FOLLOWLOCATION => TRUE,
    CURLOPT_ENCODING => 'gzip,deflate',
);

$ch = curl_init();
curl_setopt_array( $ch, $curl_options );
$output = curl_exec( $ch );
curl_close($ch);

$arr = json_decode($output,true);

foreach($arr['items'] as $val)
{
    ?>
    <img src="<?php  echo $val['thumbnailURL']; ?>" alt="Mountain View" style="width:304px;height:228px;">
    <!--echo $val['thumbnailURL'].'<br>';-->
<?
}
?>