<?php 
$ch = curl_init();
$url = "http://localhost/3-ups_api/index.php/web/Fetch_details/Fetch_info/getCountry";
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

 $url2 = "http://localhost/3-ups_api/index.php/web/Fetch_details/Fetch_info/getShopCategory";
curl_setopt($ch, CURLOPT_URL, $url2);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
$response_cat = curl_exec($ch);
 if($e = curl_error($ch)){
     echo $e;
 }
 else{
     $result_cat = json_decode($response_cat); 
 }
 $res_cat = array();
 $res_cat=$result_cat->data;

 
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>3UPS Merchant | Register</title>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/41d6de745e.js" crossorigin="anonymous"></script>

    <!-- Favicon Icon -->
    <link href="./assets/img/favicon.ico" rel="icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">
    <link rel="stylesheet" href="assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">


    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/components.min.css">
</head>

<body class="layout-4">

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-10 offset-sm-1 col-md-8 offset-md-2 col-lg-8 offset-lg-2 col-xl-8 offset-xl-2" style="border-radius: 10px;background: linear-gradient(#fcab02,#f05004);">
                        <div class="login-brand">
                            <img src="./assets/img/logo.png" alt="logo" width="100" class="shadow-light login_logo">
                        </div>
                        <?php
                        if(isset($_GET['registered']) == "true"){

                          echo  '<div class="alert alert-warning" role="alert">
                            Successfully registred!!
                            </div>';
                        } 
?>
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST" id="register">
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="frist_name">Full Name</label>
                                            <input id="f_name" type="text" class="form-control" name="full_name" autofocus required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="last_name">Business Name</label>
                                            <input id="business_name" id="business_name" type="text" class="form-control" name="business_name" required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="last_name">Phone Number</label>
                                            <input id="phone" type="tel" class="form-control" name="phone_number" minlength="10" maxlength="10" pattern="[0-9]{10}" required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
<!-- country state city dynamic -->
                                        <div class="form-group col-4">
                                            <label>Country</label>
                                            <select class="form-control " id="country-dropdown">
                                                <option value="" selected disabled>Select Country</option>
                                                <?php 
                                                for($i=0;$i<count($res);$i++){
                                                    ?>
                                                    <option value="<?php echo $res[$i]->country_id ?>"><?php echo $res[$i]->country_name ?></option>
                                                    <?php  
                                                 }
                                                ?>
                                              
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>State</label>
                                            <select class="form-control" id="state-dropdown">
                                            <option value="" disabled selected>Select State</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>City</label>
                                            <select class="form-control " id="city-dropdown">
                                            <option value="" selected disabled>Select City</option>
                                            </select>
                                        </div>
<!-- country state city dynamic end -->
                                        <div class="form-group col-4">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Nearby Airport</label>
                                            <select class="form-control " id="airport-dropdown">
                                            <option value="" selected disabled>Select Airport</option>
                                                
                                                </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Business Address</label>
                                            <input type="text" id="address" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Shop Category</label>
                                            <select class="form-control " id="shop_category">
                                            <option value="" selected disabled>Select Shop Category</option>
                                            <?php 
                                                for($i=0;$i<count($res_cat);$i++){
                                                    ?>
                                                    <option value="<?php echo $res_cat[$i]->pcm_assign_id ?>"><?php echo $res_cat[$i]->pcm_name ?></option>
                                                    <?php  
                                                 }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Shop Sub Category</label>
                                            <select class="form-control " id="sub_category_dropdown">
                                            <option value="" selected disabled>Select Shop sub Category</option>
                                                
                                            </select>
                                        </div>
                                        <!-- <div class="form-group col-4">
                                            <label>Aadhar Number</label>
                                            <input type="text" class="form-control" minlength="12" maxlength="12" pattern="[0-9]{12}" required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Pan Card</label>
                                            <input type="text" class="form-control" minlength="10" maxlength="10" pattern="[0-9]{10}" required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>GST Number</label>
                                            <input type="text" class="form-control" required>
                                        </div> -->
                                        <div class="form-group col-4">
                                            <label>Aadhar Card</label>
                                            <input type="file" id="file_aadhar" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Pan Card</label>
                                            <input type="file" id="file_pan" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>GST Registration</label>
                                            <input type="file" id="file_gst" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Business Registration</label>
                                            <input type="file" id="file_regst" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Upload Profile Photo</label>
                                            <input type="file" id="file_img" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Upload Business Logo</label>
                                            <input type="file" id="file_profile" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Opening Time</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-clock"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control timepicker">
                                            </div>
                                        </div>
                                        <input type="text" id="opening_time" class="form-control timepicker">
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Closing Time</label>
                                        <div class="input-group">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text">
                                            <i class="fas fa-clock"></i>
                                            </div>
                                        </div>
                                        <input type="text" id="closing_time" class="form-control timepicker">
                                        </div>
                                    </div>
                                    <div class="form-group col-4">
                                        <label>Business Description</label>
                                        <textarea id="business_desc" class="form-control"></textarea>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                            <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="button" onclick="register_merchant();" id="registerBtn" class="btn btn-primary btn-lg btn-block">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    
    <script>
        
 function register_merchant(){
          const xhr = new XMLHttpRequest();   
       
        var file_img =  document.getElementById('file_img')
      var file_profile =  document.getElementById('file_profile')
      var file_aadhar =  document.getElementById('file_aadhar')
      var file_pan =  document.getElementById('file_pan');
      var file_gst = document.getElementById('file_gst');
      var file_regst =  document.getElementById('file_regst');
      var f_name = document.getElementById('f_name').value;
      var phone =  document.getElementById('phone').value;
      var email =  document.getElementById('email').value;
      var state =  document.getElementById('state-dropdown').value;
      var city =  document.getElementById('city-dropdown').value;
      var countryCode =  document.getElementById('country-dropdown').value;
      var address =  document.getElementById('address').value;
      var airport =  document.getElementById('airport-dropdown').value;
      var business_name =  document.getElementById('business_name').value;
      var business_category =  document.getElementById('shop_category').value;
      var business_sub_category = document.getElementById('sub_category_dropdown').value;
      var opening_time =  document.getElementById('opening_time').value;
      var closing_time =  document.getElementById('closing_time').value;
      var business_desc =  document.getElementById('business_desc').value;
      const registerBtn = document.getElementById('registerBtn');

          console.log(f_name);
          console.log(phone);
          console.log(email);
             console.log(file_img.files);
          console.log(file_aadhar.files);
          console.log(file_pan.files);
          console.log(file_gst.files);
          console.log(file_profile.files);
          console.log(file_regst.files);

          var form_data = new FormData();
          form_data.append("submit", true)  
      form_data.append("file_img", file_img.files[0])
      form_data.append("file_profile", file_profile.files[0])
      form_data.append("file_aadhar", file_aadhar.files[0])
      form_data.append("file_pan", file_pan.files[0])
      form_data.append("file_gst", file_gst.files[0])
      form_data.append("file_regst", file_regst.files[0])
      form_data.append("f_name", f_name)
      form_data.append("phone", phone)
      form_data.append("email", email)
      form_data.append("state-dropdown", state)
      form_data.append("city-dropdown", city)
      form_data.append("country-dropdown", countryCode)
      form_data.append("address", address)
      form_data.append("airport-dropdown", airport)
      form_data.append("business_name", business_name)
      form_data.append("shop_category", business_category)
      form_data.append("sub_category_dropdown", business_sub_category)
      form_data.append("opening_time", opening_time)
      form_data.append("closing_time", closing_time)
      form_data.append("business_desc", business_desc)

      xhr.open("POST", "register_upload.php");
    //   xhr.setRequestHeader("Content-type", "multipart/form-data");
      xhr.send(form_data);
 }
    </script>

    <!-- General JS Scripts -->
    <script src="assets/bundles/lib.vendor.bundle.js"></script>
    <!-- <script src="js/CodiePie.js"></script> -->

    <!-- JS Libraies -->
    <script src="assets/modules/jquery-pwstrength/jquery.pwstrength.min.js"></script>
    <script src="assets/modules/jquery-selectric/jquery.selectric.min.js"></script>
    <script src="assets/modules/bootstrap-timepicker/js/bootstrap-timepicker.min.js"></script>


    <!-- Page Specific JS File -->
    <script src="js/page/auth-register.js"></script>

    <!-- Template JS File -->
    <script src="js/scripts.js"></script>
    <script src="js/custom.js"></script>
</body>

<script>

     

// $('#register').on('submit', function(e) {
//   const data = "";
//       e.preventDefault();

//       var file_img = $('#file_img').prop('files')[0]
//       var file_profile = $('#file_profile').prop('files')[0]
//       var file_aadhar = $('#file_aadhar').prop('files')[0]
//       var file_pan = $('#file_pan').prop('files')[0]
//       var file_gst = $('#file_gst').prop('files')[0]
//       var file_regst = $('#file_regst').prop('files')[0]
//       var f_name = $('#f_name').val()
//       var phone = $('#phone').val()
//       var email = $('#email').val()
//       var state = $('#state-dropdown').val()
//       var city = $('#city-dropdown').val()
//       var countryCode = $('#country-dropdown').val()
//       var address = $('#address').val()
//       var airport = $('#airport-dropdown').val()
//       var business_name = $('#business_name').val()
//       var business_category = $('#shop_category').val()
//       var business_sub_category = $('#sub_category_dropdown').val()
//       var opening_time = $('#opening_time').val()
//       var closing_time = $('#closing_time').val()
//       var business_desc = $('#business_desc').val()

//       var form_data = new FormData();
//       form_data.append("file_img", file_img)
//       form_data.append("file_profile", file_profile)
//       form_data.append("file_aadhar", file_aadhar)
//       form_data.append("file_pan", file_pan)
//       form_data.append("file_gst", file_gst)
//       form_data.append("file_regst", file_regst)
//       form_data.append("f_name", f_name)
//       form_data.append("phone", phone)
//       form_data.append("email", email)
//       form_data.append("state-dropdown", state)
//       form_data.append("city-dropdown", city)
//       form_data.append("country-dropdown", countryCode)
//       form_data.append("address", address)
//       form_data.append("airport-dropdown", airport)
//       form_data.append("business_name", business_name)
//       form_data.append("shop_category", business_category)
//       form_data.append("sub_category_dropdown", business_sub_category)
//       form_data.append("opening_time", opening_time)
//       form_data.append("closing_time", closing_time)
//       form_data.append("business_desc", business_desc)
      
//       $.ajax({
//         url: './backend/script.php',
//         type: 'POST',
//         contentType: 'FormData',
// processData: false,
// cache: false,
//         // dataType: 'formData',
//         data: {
//           type: "register",
//          data: form_data,
//         },
//         success: function(data) {
//           console.log(data);
//           if(data === "true"){

//             //   swal({
//             //       title: "Registred successfully",
//             //       icon: "success",
//             //     }).then(function() {
//             //         window.location.href = "./index.php";
//             //     });
//             console.log("done")
//             }  
//             else{
//                 // swal({
//                 //   title: "Invalid details",
//                 //   icon: "warning",
//                 // }).then(function() {
//                 //     window.location.href = "./login.php";
//                 // });
//                 console.log("nope")
//             }  
            
                
                
//       },
      
//       error: function(response) {
//         console.log("Error")
//         console.log(response);
//         }
//       });

//       return false;

//     });

// country, statem, city selector

$(document).ready(function() {
$('#country-dropdown').on('change', function() {
var country_id = this.value;
$.ajax({
url: "./backend/states-by-country.php",
type: "POST",
data: {
country_id: country_id
},
cache: false,
success: function(result){
$("#state-dropdown").html(result);
$('#city-dropdown').html('<option value="">Select State First</option>'); 
}
});
});  

$('#state-dropdown').on('change', function() {
var state_id = this.value;
$.ajax({
url: "./backend/cities-by-state.php",
type: "POST",
data: {
state_id: state_id
},
cache: false,
success: function(result){
$("#city-dropdown").html(result);
$('#airport-dropdown').html('<option value="">Select city First</option>'); 

}
});
});

$('#city-dropdown').on('change', function() {
var city_id = this.value;
$.ajax({
url: "./backend/airport-by-cities.php",
type: "POST",
data: {
city_id: city_id
},
cache: false,
success: function(result){
$("#airport-dropdown").html(result);
}
});
});  

$('#shop_category').on('change', function() {
var shop_cat_id = this.value;
$.ajax({
url: "./backend/subcategory-by-category.php",
type: "POST",
data: {
    shop_cat_id: shop_cat_id
},
cache: false,
success: function(result){
$("#sub_category_dropdown").html(result);; 
}
});
});  

});

</script>

<!-- auth-register.html  Tue, 07 Jan 2020 03:39:48 GMT -->

</html>