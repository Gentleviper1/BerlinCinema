<?php
                  session_start();        
                    if (isset($_SESSION["errMsg"])) {
                        $errMsg = $_SESSION["errMsg"];
                        unset($_SESSION["errMsg"]);
                    } else {
                        $errMsg = "";
                    }
require_once '../../Model/Customer.php';
require_once  '../../Control/AuthController.php';
?>
<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Login</title>
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

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a href="../index.html"><img class="logo-img" src="../Admin/assets/images/logo1.png" alt="logo"></a><span class="splash-description">Please enter your user information.</span></div>
            <div class="card-body">

                <form id="formAuthentication" class="mb-3" action="../../Control/LoginController.php" method="POST">

                    <?php

                    if ($errMsg != "") {

                    ?>
                        <div class="alert alert-danger" role="alert"><?php echo $errMsg;  ?></div>

                    <?php
                    }

                    ?>

            </div>
            <div class="form-group">
                <input
                    class="form-control form-control-lg"
                    id="usernamee"
                    name="username"
                    type="text"
                    placeholder="Username"
                    autocomplete="off"
                    name="username">
            </div>
            <div class="form-group">
                <input
                    class="form-control form-control-lg"
                    id="password"
                    name="password"
                    type="password"
                    placeholder="Password">
            </div>
            <div class="form-group">
                <label class="custom-control custom-checkbox">
                    <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Remember Me</span>
                </label>
            </div>
            <button type="submit" class="btn btn-primary btn-lg btn-block">Sign in</button>
            </form>
        </div>

        <div class="card-footer-item card-footer-item-bordered">
            <a href="register.php" class="footer-link">Create An Account</a>
        </div>


    </div>
    </div>

    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="assets/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>

</html>