<?php 

$device_id = "HG123";
$message="hello";
//API URL of FCM
$url = 'https://fcm.googleapis.com/fcm/send';

/*api_key available in:
Firebase Console -> Project Settings -> CLOUD MESSAGING -> Server key*/    $api_key = 'AAAA8m5PJDo:APA91bE85g_BGz5flj8NWbN46Cq2coxK2OSh6RGnW7AMbTroFwj3nqMWW188QBUrs3TG7WSsCyDPxVRUroyVMTZbmruDZALc2D5A902ASm8ck1dwWIEnzVE7HD2YQ-hejJSe-fBID6VN';
            
$fields = array (
    'registration_ids' => array (
            $device_id
    ),
    'data' => array (
            "message" => $message
    )
);

//header includes Content type and api key
$headers = array(
    'Content-Type:application/json',
    'Authorization:key='.$api_key
);
            
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($fields));
$result = curl_exec($ch);
if ($result === FALSE) {
    die('FCM Send Error: ' . curl_error($ch));
}
curl_close($ch);
print_r($result);
?>