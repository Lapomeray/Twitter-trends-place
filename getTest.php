<?php
/**
 * Created by IntelliJ IDEA.
 * User: brandon
 * Date: 12/23/17
 * Time: 12:37 AM
 */


// This Program Will get trending hashtags in the USA

require "twitteroauth/autoload.php";
use Abraham\TwitterOAuth\TwitterOAuth;





/* Enter YOUR Credentials
 *
 * Consumer Key
 * Consumer Secret
 * Access Token
 * Access Token Secret
 *
 */


$ck = 'XXXXXXXXXXXXXXXXXXX';
$cs = 'XXXXXXXXXXXXXXXXXXX';

$at = 'XXXXXXXXXXXXXXXXXXX';
$ats = 'XXXXXXXXXXXXXXXXXXX';

// Creates Connection
$connection = new TwitterOAuth

(   $ck,
    $cs,
    $at,
    $ats

);




//Location ID - This is the WOEID for the United States. Choose your own location using:  http://woeid.rosselliot.co.nz/lookup/
$locationID = "23424977";

//Constructs parameters
$parameters = [
    'id' => $locationID
];

/** Executes Tweet */
 $result = $connection->get('trends/place', $parameters);

 // Get Array of trends
foreach ($result as $r) {

    // Get trend names
    foreach ($r->trends as $a){
        echo $a->name;
        echo "<br>";
    }


}



?>