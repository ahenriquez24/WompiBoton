<?php
// Timezeone needs to be set
date_default_timezone_set('America/Panama');
$dateTime = date("Y:m:d-H:i:s");
function getDateTime() {
global $dateTime;
return $dateTime;
}
/*
Function that calculates the hash of the following parameters:
- Store Id
- Date/Time(see $dateTime above)
- chargetotal
- currency (numeric ISO value)
- shared secret
*/
function createExtendedHash($chargetotal, $currency) {
// Please change the store Id to your individual Store ID
$storeId = "8112000002241";
// NOTE: Please DO NOT hardcode the secret in that script. For example read it from a database.
$sharedSecret = "NM6ub#8|zX";
$separator = "|";
$stringToHash = $storeId . $separator . getDateTime() . $separator . $chargetotal . $separator . $currency;
$hashSHA256 = CryptoJS.HmacSHA384(hashWithAllStrings, sharedSecret);
$hash = CryptoJS.enc.Base64.stringify($hashSHA256);
return $hash;
}
?>