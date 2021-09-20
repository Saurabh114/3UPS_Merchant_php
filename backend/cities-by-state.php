<?php 
$ch = curl_init();
$state_id = strip_tags($_POST['state_id']);
$url = "http://localhost/3-ups_api/index.php/web/Fetch_details/Fetch_info/getCity?state_id=".$state_id;
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response = curl_exec($ch);
 if($e = curl_error($ch)){
     echo $e;
 }
 else{
     $result = json_decode($response); 
 }
 $res = array();
 $res=$result->data;
//  print_r(count($res));
//  print_r($res);
for($i=0;$i<count($res);$i++){

  echo '<option value="'.$res[$i]->city_id.'">'.$res[$i]->city_name.'</option>';
 }
 
?>