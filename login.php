<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>3UPS Merchant | Login </title>

    <!-- fontawesome -->
    <script src="https://kit.fontawesome.com/41d6de745e.js" crossorigin="anonymous"></script>

    <!-- Favicon Icon -->
    <link href="./assets/img/favicon.ico" rel="icon">

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">

    <!-- Template CSS -->
    <link rel="stylesheet" href="assets/css/style.min.css">
    <link rel="stylesheet" href="assets/css/components.min.css">
</head>

<body class="layout-4">

    <div id="app">
        <section class="section">
            <div class="container mt-5">
                <div class="row">
                    <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4" style="border-radius: 10px;background: linear-gradient(#fcab02,#f05004);">
                        <div class="login-brand">
                            <img src="./assets/img/logo.png" alt="logo" width="100" class="shadow-light login_logo">
                        </div>
                        <div class="card card-primary">
                            <div class="card-header">
                                <ul class="nav nav-pills" id="myTab3" role="tablist">
                                    <li class="nav-item"><a class="nav-link active" id="profile-tab3" data-toggle="tab" href="#profile3" role="tab" aria-controls="profile" aria-selected="false">Login With OTP</a></li>
                                    <li class="nav-item"><a class="nav-link" id="home-tab3" data-toggle="tab" href="#home3" role="tab" aria-controls="home" aria-selected="true">Login With Password</a></li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="myTabContent2">
                                    <div class="tab-pane fade " id="home3" role="tabpanel" aria-labelledby="home-tab3">
                                        <form method="POST" action="#" class="needs-validation" novalidate="">
                                            <div class="form-group">
                                                <label for="email">Email</label>
                                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                                <div class="invalid-feedback">
                                                    Please fill in your email
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="d-block">
                                                    <label for="password" class="control-label">Password</label>
                                                    <div class="float-right">
                                                        <a href="forgot-password.php" class="text-small">
                                                            Forgot Password?
                                                        </a>
                                                    </div>
                                                </div>
                                                <div class="input-group">
                                                    <input id="myPassword" type="password" class="form-control phone-number" name="password" tabindex="2" required>
                                                    <div class="invalid-feedback">
                                                        Please fill in your password
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="custom-control custom-checkbox">
                                                    <input type="checkbox" name="remember" class="custom-control-input" tabindex="3" id="remember-me" onclick="myFunction()">
                                                    <label class="custom-control-label" for="remember-me">Show Password</label>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="tab-pane fade show active" id="profile3" role="tabpanel" aria-labelledby="profile-tab3">
                                        <form method="POST" action="#" class="needs-validation" novalidate="">
                                            <div class="form-group">
                                                <label for="email">Email / Phone No</label>
                                                <div class="input-group">
                                                    <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                                    <div class="input-group-prepend">
                                                        <div class="input-group-text btn">
                                                            Send OTP
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="invalid-feedback">
                                                    Please fill in your email or Phone number
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <div class="d-block">
                                                    <label for="password" class="control-label">OTP</label>
                                                </div>
                                                <div class="input-group">
                                                    <input id="otp" type="text" class="form-control phone-number" name="password" minlength="6" maxlength="6" pattern="[0-9]{6}" tabindex="2" required>
                                                    <div class="invalid-feedback">
                                                        Please Enter Valid OTP
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-lg btn-block" tabindex="4">
                                                    Login
                                                </button>
                                            </div>
                                        </form>
                                    </div>
                                </div>


                                <div class="text-center mt-4 mb-3">
                                    <div class="text-job text-muted">
                                        Don't have an account? <a href="register.php">Create One</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <script>
        function myFunction() {
            var x = document.getElementById("myPassword");
            if (x.type === "password") {
                x.type = "text";
            } else {
                x.type = "password";
            }
        }
    </script>


    <!-- General JS Scripts -->
    <script src="assets/bundles/lib.vendor.bundle.js"></script>
    <script src="js/CodiePie.js"></script>

    <!-- JS Libraies -->

    <!-- Page Specific JS File -->

    <!-- Template JS File -->
    <script src="js/scripts.js"></script>
    <script src="js/custom.js"></script>
</body>

</html>