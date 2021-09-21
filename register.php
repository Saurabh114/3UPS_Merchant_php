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
                        <div class="card card-primary">
                            <div class="card-header">
                                <h4>Register</h4>
                            </div>
                            <div class="card-body">
                                <form method="POST">
                                    <div class="row">
                                        <div class="form-group col-4">
                                            <label for="frist_name">Full Name</label>
                                            <input id="frist_name" type="text" class="form-control" name="full_name" autofocus required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="last_name">Business Name</label>
                                            <input id="business_name" type="text" class="form-control" name="business_name" required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="last_name">Phone Number</label>
                                            <input id="phone_number" type="tel" class="form-control" name="phone_number" minlength="10" maxlength="10" pattern="[0-9]{10}" required>
                                        </div>
                                        <div class="form-group col-4">
                                            <label for="email">Email</label>
                                            <input id="email" type="email" class="form-control" name="email">
                                            <div class="invalid-feedback">
                                            </div>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Country</label>
                                            <select class="form-control selectric">
                                                <option selected disabled>Select Contry</option>
                                                <option value="">India</option>
                                                <option value="">USA</option>
                                                <option value="">Japan</option>
                                                <option value="">Malaysia</option>
                                                <option value="">Thailand</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>State</label>
                                            <select class="form-control selectric">
                                                <option selected disabled>Select State</option>
                                                <option value="">Maharashtra</option>
                                                <option value="">Karnataka</option>
                                                <option value="">Delhi</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>City</label>
                                            <select class="form-control selectric">
                                                <option selected disabled>Select City</option>
                                                <option value="">Pune</option>
                                                <option value="">Mumbai</option>
                                                <option value="">Karad</option>
                                                <option value="">Bangalore</option>
                                                <option value="">Delhi</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Postal Code</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Nearby Airport</label>
                                            <select class="form-control selectric">
                                                <option selected disabled>Select Airport</option>
                                                <option value="Food and Beverage">Pune International Airport</option>
                                                <option value="Fashion and Lifestyle">Chhatrapati Shivaji International Airport</option>
                                                <option value="Grocery">Karad Airport</option>
                                                <option value="Caterers">Solapur Airport </option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Business Address</label>
                                            <input type="text" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Business Type</label>
                                            <select class="form-control selectric">
                                                <option selected disabled>Select Business Type</option>
                                                <option value="Private Limited">Private Limited</option>
                                                <option value="Proprietorship">Proprietorship</option>
                                                <option value="Partnership">Partnership</option>
                                                <option value="Public Limited">Public Limited</option>
                                                <option value="LLP">LLP</option>
                                                <option value="Not Registered">Not Registered</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Business Category</label>
                                            <select class="form-control selectric">
                                                <option selected disabled>Select Business Category</option>
                                                <option value="Food and Beverage">Food and Beverage</option>
                                                <option value="Fashion and Lifestyle">Fashion and Lifestyle</option>
                                                <option value="Grocery">Grocery</option>
                                                <option value="Caterers">Caterers</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-4">
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
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Aadhar Card</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Pan Card</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>GST Registration</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Business Registration</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Upload Profile Photo</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Upload Business Logo</label>
                                            <input type="file" class="form-control">
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
                                        <div class="form-group col-4">
                                            <label>Closing Time</label>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text">
                                                        <i class="fas fa-clock"></i>
                                                    </div>
                                                </div>
                                                <input type="text" class="form-control timepicker">
                                            </div>
                                        </div>
                                        <div class="form-group col-4">
                                            <label>Business Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" name="agree" class="custom-control-input" id="agree">
                                            <label class="custom-control-label" for="agree">I agree with the terms and conditions</label>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <button type="submit" class="btn btn-primary btn-lg btn-block">Register</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- General JS Scripts -->
    <script src="assets/bundles/lib.vendor.bundle.js"></script>

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

</html>