<?php 
$ch = curl_init();
$shop_cat_id = strip_tags($_POST['shop_cat_id']);
$url = "http://localhost/3-ups_api/index.php/web/Fetch_details/Fetch_info/getShopSubCategory?shop_cat_id=".$shop_cat_id;
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

  echo '<option value="'.$res[$i]->pcmsc_assign_id.'">'.$res[$i]->pcmsc_cat_name.'</option>';
 }
 
?>