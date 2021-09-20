<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
    <title>Profile &mdash; CodiePie</title>

    <!-- General CSS Files -->
    <link rel="stylesheet" href="assets/modules/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/modules/fontawesome/css/all.min.css">

    <!-- CSS Libraries -->
    <link rel="stylesheet" href="assets/modules/jquery-selectric/selectric.css">
    <link rel="stylesheet" href="assets/modules/bootstrap-social/bootstrap-social.css">
    <link rel="stylesheet" href="assets/modules/summernote/summernote-bs4.css">
    <link rel="stylesheet" href="assets/modules/bootstrap-timepicker/css/bootstrap-timepicker.min.css">


    <?php include('includes/header.php') ?>


    <!-- Start app main Content -->
    <div class="main-content">
        <section class="section">
            <div class="section-header">
                <h1>Profile</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item">Profile</div>
                </div>
            </div>
            <div class="section-body">
                <h2 class="section-title">Hi, Merchant!</h2>
                <p class="section-lead">Dominos</p>

                <div class="row mt-sm-4">
                    <div class="col-12 col-md-12 col-lg-8">
                        <div class="card profile-widget">
                            <div class="profile-widget-header text-center">
                                <img alt="image" src="assets/img/avatar/avatar-1.png" class="rounded-circle profile-widget-picture">
                                <img alt="image" src="assets/img/logo.png" class="profile-widget-picture">
                            </div>
                            <div class="profile-widget-description row">
                                <div class="col-lg-8">
                                    <h5>Business Address:</h5>
                                    <p>Plot No. 29, MadhuMalti Nivas, Omkareshrar Nagar, Vrundavan Nagar Road, Malkapur</p>
                                </div>
                                <div class="col-lg-4">
                                    <h5>Airport:</h5>
                                    <p>Pune International Airport</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-12 col-lg-12">
                        <div class="card" style="margin-bottom: 0px;">
                            <form method="post" class="needs-validation" novalidate="">
                                <div class="card-header">
                                    <h4>Edit Profile</h4>
                                </div>
                                <div class="card-body">
                                    <div class="row">
                                        <div class="form-group col-md-4 col-12">
                                            <label>Full Name</label>
                                            <input type="text" class="form-control" value="" required="">
                                            <div class="invalid-feedback">Please fill in the Full Name</div>
                                        </div>
                                        <div class="form-group col-md-4 col-12">
                                            <label for="email">Email</label>
                                            <div class="input-group">
                                                <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                                        Edit
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please fill in your email or Phone number
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-12">
                                            <label for="email">Phone No</label>
                                            <div class="input-group">
                                                <input id="phone_number" type="tel" class="form-control" name="phone" minlength="10" maxlength="10" pattern="[0-9]{10}" required autofocus>
                                                <div class="input-group-prepend">
                                                    <div class="input-group-text btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#exampleModal1">
                                                        Edit
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="invalid-feedback">
                                                Please fill in your email or Phone number
                                            </div>
                                        </div>
                                        <div class="form-group col-md-4 col-12">
                                            <label>Business Name</label>
                                            <input type="text" class="form-control" value="" required="">
                                            <div class="invalid-feedback">Please fill in the Business Name</div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
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
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label>Business Category</label>
                                            <select class="form-control selectric">
                                                <option selected disabled>Select Business Category</option>
                                                <option value="Food and Beverage">Food and Beverage</option>
                                                <option value="Fashion and Lifestyle">Fashion and Lifestyle</option>
                                                <option value="Grocery">Grocery</option>
                                                <option value="Caterers">Caterers</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label>Aadhar Number</label>
                                            <input type="text" class="form-control" minlength="12" maxlength="12" pattern="[0-9]{12}" required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label>Pan Card</label>
                                            <input type="text" class="form-control" minlength="10" maxlength="10" pattern="[0-9]{10}" required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label>GST Number</label>
                                            <input type="text" class="form-control" required>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label>Business Description</label>
                                            <textarea class="form-control"></textarea>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
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
                                        <div class="form-group col-lg-4 col-md-4">
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
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label class="col-form-label text-md-right">Edit Profile</label>
                                            <div id="image-preview" class="image-preview">
                                                <label for="image-upload" id="image-label"><i class="far fa-edit" aria-hidden="true"></i></label>
                                                <input type="file" name="image" id="image-upload" />
                                            </div>
                                        </div>
                                        <div class="form-group col-lg-4 col-md-4">
                                            <label class="col-form-label text-md-right">Edit Logo</label>
                                            <div id="image-preview1" class="image-preview">
                                                <label for="image-upload1" id="image-label"><i class="far fa-edit" aria-hidden="true"></i></label>
                                                <input type="file" name="image" id="image-upload1" />
                                            </div>
                                        </div>
                                        <div class="col-lg-4"></div>
                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Aadhar Card</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Pan Card</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>GST Registration</label>
                                            <input type="file" class="form-control">
                                        </div>
                                        <div class="form-group col-lg-3 col-md-3">
                                            <label>Business Registration</label>
                                            <input type="file" class="form-control">
                                        </div>
                                    </div>
                                </div>
                        </div>
                        <div class="card-footer text-center">
                            <button class="btn btn-primary">Save Changes</button>
                        </div>
                        </form>
                    </div>
                </div>
                <div class=" card mt-sm-4">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-lg-6 mt-3">
                                <h5>Aadhar Card</h5>
                                <embed src="./assets/img/tt.pdf" type="application/pdf" width="100%" height="300px" />
                            </div>
                            <div class="col-lg-6 mt-3">
                                <h5>Pan Card</h5>
                                <embed src="./assets/img/tt.pdf" type="application/pdf" width="100%" height="300px" />
                            </div>
                            <div class="col-lg-6 mt-3">
                                <h5>GST Registration</h5>
                                <embed src="./assets/img/tt.pdf" type="application/pdf" width="100%" height="300px" />
                            </div>
                            <div class="col-lg-6 mt-3">
                                <h5>Business Registration</h5>
                                <embed src="./assets/img/tt.pdf" type="application/pdf" width="100%" height="300px" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </div>
    </section>
    </div>

    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verify Email ID:</h5>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> X</a>
                </div>
                <div class="modal-body" style="padding-bottom: 0px;">
                    <form>
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input id="email" type="email" class="form-control" name="email" tabindex="1" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your email
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary">Send OTP</button>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Verify OTP</button>
                </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Verify Phone Number:</h5>
                    <a type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"> X</a>
                </div>
                <div class="modal-body" style="padding-bottom: 0px;">
                    <form>
                        <div class="form-group">
                            <label for="email">Phone Number</label>
                            <input id="tel" type="tel" class="form-control" name="phone" tabindex="1" minlength="10" maxlength="10" pattern="[0-9]{10}" required autofocus>
                            <div class="invalid-feedback">
                                Please fill in your Contact Number
                            </div>
                        </div>
                        <div class="text-center">
                            <button type="button" class="btn btn-primary">Send OTP</button>
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
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary">Verify OTP</button>
                </div>
            </div>
        </div>
    </div>

    <?php include('includes/footer.php') ?>
    </body>

</html>