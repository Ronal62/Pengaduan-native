<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>CelestialUI Admin</title>
    <!-- base:css -->
    <link rel="stylesheet" href="admin
    /vendors/typicons.font/font/typicons.css">
    <link rel="stylesheet" href="admin
    /vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <link rel="stylesheet" href="admin
    /css/vertical-layout-light/style.css">
    <!-- endinject -->
    <link rel="shortcut icon" href="admin
    /images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <div class="container-fluid page-body-wrapper full-page-wrapper">
            <div class="content-wrapper d-flex align-items-center auth px-0">
                <div class="row w-100 mx-0">
                    <div class="col-lg-4 mx-auto">
                        <div class="auth-form-light text-left py-5 px-4 px-sm-5">
                            <div class="brand-logo">
                                <img src="admin
                                /images/logo.svg" alt="logo">
                            </div>
                            <h4>New here?</h4>
                            <h6 class="font-weight-light">Signing up is easy. It only takes a few steps</h6>
                            <form class="pt-3" method="POST" action="fungsi_register.php">
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="nik" name="nik" placeholder="NIK">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="nama" name="nama" placeholder="Nama">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="username" name="username" placeholder="Username">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="password" name="password" placeholder="password">
                                </div>
                                <div class="form-group">
                                    <input type="text" class="form-control form-control-lg" id="telp" name="telp" placeholder="telp">
                                </div>
                                <div class="mb-4">
                                    <div class="form-check">
                                        <label class="form-check-label text-muted">
                                            <input type="checkbox" class="form-check-input">
                                            I agree to all Terms & Conditions
                                        </label>
                                    </div>
                                </div>
                                <div class="mt-3">
                                    <button class="btn btn-block btn-primary btn-lg font-weight-medium auth-form-btn" type="sub
                                    " name="simpan" value="submit">SIGN UP</button>
                                </div>
                                <div class="text-center mt-4 font-weight-light">
                                    Already have an account? <a href="login.php" class="text-primary">Login</a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- content-wrapper ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- base:js -->
    <script src="admin
    /vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- inject:js -->
    <script src="admin
    /js/off-canvas.js"></script>
    <script src="admin
    /js/hoverable-collapse.js"></script>
    <script src="admin
    /js/template.js"></script>
    <script src="admin
    /js/settings.js"></script>
    <script src="admin
    /js/todolist.js"></script>
    <!-- endinject -->
</body>

</html>