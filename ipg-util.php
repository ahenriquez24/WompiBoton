<?php   
 // Timezeone needs to be setdate_default_timezone_set('America/Panama'); 
 $dateTime = date("Y:m:d-H:i:s"); functiongetDateTime() {
 global $dateTime;return $dateTime;    }   
 /*Function that calculates the hash of the following parameters:- Store Id- Date/Time(see $dateTime above)- chargetotal- currency (numeric ISO value)- shared secret 
 */
functioncreateHash($chargetotal, $currency) {
 // Please change the store Id to your individual Store ID
 $storeId = "8112000002241";
 // NOTE: Please DO NOT hardcode the secret in that script. For example read it from a database.
 $sharedSecret = "NM6ub#8|zX";
 $stringToHash = $storeId . getDateTime() . $chargetotal . $currency . $sharedSecret;
 $ascii = bin2hex($stringToHash);
 return hash("sha256", $ascii);  
 }
 ?>
