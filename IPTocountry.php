<?php
$ip = $_SERVER['REMOTE_ADDR']; // the IP address to query
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
if($query && $query['status'] == 'success') {
    echo "<pre>";
    print_r($query);
    echo "</pre>";
   // echo 'Hello visitor from '.$query['countryCode'].', '.$query['city'].'!';
} else {
   echo 'Unable to get location';
}

/*********************************************************************************
        OPTIONAL CODE WITH WHOIS
**********************************************************************************/
$ip = $_SERVER['REMOTE_ADDR']; // the IP address to query
//$ip="24.48.176.0";
$query = @unserialize(file_get_contents('http://ip-api.com/php/'.$ip));
echo "<pre>";
print_r($query);
echo "</pre>";

?>
