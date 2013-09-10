$headers = array('Content-Type:application/json',
'Authorization:key=AIzaSyDrdkTAvXW4dFz7bddHiEhZoDdKGUSw6XE'
);


$message = '{"data":{"vFullName":"hardik"},"registration_ids":["'.$row->deviceRegistrationID.'"]}';
$ch = curl_init();
curl_setopt_array($ch, array(
CURLOPT_URL => 'https://android.googleapis.com/gcm/send',
CURLOPT_HTTPHEADER => $headers,
CURLOPT_POST => true,
CURLOPT_RETURNTRANSFER => true,
CURLOPT_POSTFIELDS => $message
));

$response = curl_exec($ch);
$out['status'] = "sent to android";
curl_close($ch);
unset($ch);
