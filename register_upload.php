<?php 

var_dump($_FILES);
print_r($_POST);
if(isset($_POST['submit'])){
  $url = 'http://localhost/3-ups_api/index.php/web/Merchant_web/MerchantRegister/register_merchant';
  $name1 = $_FILES['file_img'] ['name'];
  $temp_name1 = $_FILES['file_img'] ['tmp_name'];
  $type1 = $_FILES['file_img'] ['type'];

  $name2 = $_FILES['file_profile'] ['name'];
  $temp_name2 = $_FILES['file_profile'] ['tmp_name'];
  $type2 = $_FILES['file_profile'] ['type'];

  $name3 = $_FILES['file_aadhar'] ['name'];
  $temp_name3 = $_FILES['file_aadhar'] ['tmp_name'];
  $type3 = $_FILES['file_aadhar'] ['type'];

  $name4 = $_FILES['file_pan'] ['name'];
  $temp_name4 = $_FILES['file_pan'] ['tmp_name'];
  $type4 = $_FILES['file_pan'] ['type'];

  $name5 = $_FILES['file_gst'] ['name'];
  $temp_name5 = $_FILES['file_gst'] ['tmp_name'];
  $type5 = $_FILES['file_gst'] ['type'];

  $name6 = $_FILES['file_regst'] ['name'];
  $temp_name6 = $_FILES['file_regst'] ['tmp_name'];
  $type6 = $_FILES['file_regst'] ['type'];

  $name = $_POST['f_name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $state = $_POST['state-dropdown'];
  $city = $_POST['city-dropdown'];
  $country = $_POST['country-dropdown'];
  $address = $_POST['address'];
  $airport = $_POST['airport-dropdown'];
  $business_name = $_POST['business_name'];
  $shop_cat = $_POST['shop_category'];
  $shop_sub_cat = $_POST['sub_category_dropdown'];
  $open = $_POST['opening_time'];
  $close = $_POST['closing_time'];
  $busines_desc = $_POST['business_desc'];

  $merchant_data = array("file_img"=>curl_file_create($temp_name1, $type1, $name1), 
  "file_profile"=>curl_file_create($temp_name2, $type2, $name2), 
  "file_aadhar"=>curl_file_create($temp_name3, $type3, $name3), 
  "file_pan"=>curl_file_create($temp_name4, $type4, $name4), 
  "file_gst"=>curl_file_create($temp_name5, $type5, $name5), 
  "file_regst"=>curl_file_create($temp_name6, $type6, $name6),
  "f_name"=>$name, 
  "phone"=>$phone, 
  "email"=>$email, 
  "state"=>$state, 
  "city"=>$city, 
  "countryCode"=>$country, 
  "address"=>$address, 
  "airport"=>$airport, 
  "business_name"=>$business_name, 
  "business_category"=>$shop_cat, 
  "business_sub_category"=>$shop_sub_cat, 
  "opening_time"=>$open, 
  "closing_time"=>$close, 
  "business_desc"=>$busines_desc );
  
  $ch = curl_init();
  curl_setopt($ch, CURLOPT_URL, $url);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
  curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type:Multipart/form-data'));
  curl_setopt($ch, CURLOPT_POST, 1);
  curl_setopt($ch, CURLOPT_POSTFIELDS, $merchant_data);
  $result = curl_exec($ch);
  curl_close($ch);
  print_r($result);
  
  
  if($result){
    header('Location:./register.php?registered=true');
  }
  else {
    header('Location:./register.php?registered=false');
  }

}

?>