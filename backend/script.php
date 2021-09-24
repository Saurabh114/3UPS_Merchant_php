<?php 



if (isset($_POST['type']) == "login") {
    $email=strip_tags($_POST['mail']);
    $pass=strip_tags($_POST['pass']);
      if(!empty($email) && !empty($pass))
      {
        $ch = curl_init();
        $url = "https://3-upstesting.site/delta_api/index.php/web/Login/login_with_pwd?user_name=".$email."&user_password=".$pass;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        if($e = curl_error($ch)){
          echo $e;
        }
        else{
        $res =  json_decode($response);

        if($res->status){

          $merchant_data = array();
          $merchant_data = $res->data[0];
          // print_r($merchant_data);
          // print_r($res->data[0]);
          
          // print_r($merchant_data->merchant_id);
          session_start();
          $_SESSION['merchant_id'] = $merchant_data->merchant_id;
          $_SESSION['token'] = $res->token;
           $result=true;
          echo json_encode($result);
          
        }
        else {
          $result=false;
          echo json_encode($result);
        }
        }
      }
    
}


else if(isset($_GET['type']) == "logout"){
  
  session_start();
  
$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, 0);
  session_destroy();
  header("Location: ../login.php");
}

else if(isset($_POST['type_otp'])){
        $user_input= strip_tags($_POST['user']);
        $ch = curl_init();
        $url = "https://3-upstesting.site/delta_api/index.php/web/Login/login_with_otp?user_input=".$user_input;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        if($e = curl_error($ch)){
          echo $e;
        }
        else{
        $res =  json_decode($response);
        
        if($res->status){
          $result=true;
          echo json_encode($result);
        }
        else{
          $result=false;
          echo json_encode($result);
        }
      
        }
      
}
else if(isset($_POST['verify_otp'])){
        $user_otp= strip_tags($_POST['user_otp']);
        $user_input= strip_tags($_POST['user_input']);
        $fcm= strip_tags($_POST['fcm_token']);
        $ch = curl_init();
        $url = "https://3-upstesting.site/delta_api/index.php/web/Login/verification_otp?merchant_input".$user_input."&merchant_otp=".$user_otp."&merchant_fcm_token=".$fcm;
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $response = curl_exec($ch);
        if($e = curl_error($ch)){
          echo $e;
        }
        else{
        $res =  json_decode($response);
        
        if($res->status){
          $result=true;
          echo json_encode($result);
        }
        else{
          $result=false;
          echo json_encode($result);
        }
      
        }
      
}


?>
