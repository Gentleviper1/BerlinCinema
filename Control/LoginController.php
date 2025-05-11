<?php
session_start();
require_once '../Model/Customer.php';
require_once  'AuthController.php';

$errMsg = "";
if (isset($_POST['username']) && isset($_POST['password'])) {
    if (!empty($_POST['username']) && !empty($_POST['password'])) {
        $customer = new Customer();
        $auth = new AuthController();
        $customer->email = $_POST['username'];
        $customer->password = $_POST['password'];
        if (!$auth->login($customer)) {
            $_SESSION["errMsg"] = $_SESSION["errMsg"] ?? "Login failed";
            header("Location: ../Views/Auth/login.php");
            exit();
        } else {
            if ($_SESSION["CustomerId"] == null) {
                $_SESSION["errMsg"] = "Login failed";
                header("Location: ../Views/Auth/login.php");
                exit();
            } elseif ($_SESSION["CustomerRoleId"] == 2) {
                header("location: ../Views/Admin/index.php");
                exit();
            } else {
                header("location: ../Views/user/index-2.php");
                exit();
            }
        }
    }
    } else {
        $_SESSION["errMsg"] = "please fill all fields";
        header("Location: ../Views/Auth/login.php");
        exit();
    }

   