<?php

session_start();
// Check if there is an error message to display
if (isset($_SESSION["errMsg"])) {
    $errMsg = $_SESSION["errMsg"];
    unset($_SESSION["errMsg"]);
} else {
    $errMsg = "";
}
require_once '../../Model/Customer.php';
require_once  '../../Control/AuthController.php';

?>
<!-- ============================================================== -->

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registeration</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="../Admin/assets/vendor/bootstrap/css/bootstrap.min.css">
    <link href="../Admin/assets/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="../Admin/assets/libs/css/style.css">
    <link rel="stylesheet" href="../Admin/assets/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
        html,
        body {
            height: 100%;
        }

        body {
            display: -ms-flexbox;
            display: flex;
            -ms-flex-align: center;
            align-items: center;
            padding-top: 40px;
            padding-bottom: 40px;
        }
    </style>
</head>
<!-- ============================================================== -->
<!-- signup form  -->
<!-- ============================================================== -->

<body>
    <!-- ============================================================== -->
    <!-- signup form  -->
    <!-- ============================================================== -->
    <form class="splash-container" action="../../Control/RegisterationController.php" method="POST">
        <div class="card">
            <div class="card-header">
                <div class="splash-description">
                    <?php
                    if ($errMsg != "") {
                    ?>
                        <div class="alert alert-danger" role="alert"><?php echo $errMsg;  ?></div>
                    <?php
                    }
                    ?>
                <h3 class="mb-1">Signup </h3>
                <p>Please enter your information.</p>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <label for="">Username</label>
                    <input 
                    class="form-control form-control-lg" 
                    type="text" 
                    name="username" 
                    required="" 
                    placeholder="Username" 
                    autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="">Date Of Birth</label>
                    <input 
                    class="form-control form-control-lg" 
                    type="date" 
                    required="" 
                    name="dob" 
                    placeholder="Date of Birth">
                </div>
                <div class="form-group">
                    <label for="">Phone</label>
                    <input 
                    class="form-control form-control-lg" 
                    type="phone" 
                    required="" 
                    name="phone" 
                    placeholder="Phone" 
                    autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="">email</label>
                    <input 
                    class="form-control form-control-lg" 
                    type="email" 
                    name="email" 
                    required="" 
                    placeholder="E-mail" 
                    autocomplete="off">
                </div>
                <div class="form-group">
                    <label for="">Password</label>
                    <input 
                    class="form-control form-control-lg" 
                    id="pass1" 
                    name="password" 
                    type="password" 
                    required="" 
                    placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="">Confirm Password</label>
                    <input 
                    class="form-control form-control-lg" 
                    required=""  
                    name="Confirm" 
                    placeholder="Confirm passowrd" 
                    type="password" 
                    id="pass2">
                </div>

                <div class="form-group pt-2">
                    <button class="btn btn-block btn-primary" type="submit">Register My Account</button>
                </div>
                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox"><span class="custom-control-label">By creating an account, you agree the <a href="#">terms and conditions</a></span>
                    </label>
                </div>
                <div class="form-group row pt-0">
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12 mb-2">
                        <button class="btn btn-block btn-social btn-facebook " type="button">Facebook</button>
                    </div>
                    <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 col-12">
                        <button class="btn  btn-block btn-social btn-twitter" type="button">Twitter</button>
                    </div>
                </div>
            </div>
            <div class="card-footer bg-white">
                <p>Already member? <a href="login.php" class="text-secondary">Login Here.</a></p>
            </div>
        </div>
    </form>
</body>


</html>