<?php
session_start();
require_once '../Model/Customer.php';
require_once  'AuthController.php';

$errMsg = "";
if (isset($_POST['username'], $_POST['password'], $_POST['phone'], $_POST['email'], $_POST['dob'], $_POST['Confirm'])) {
    if (!empty($_POST['username']) && !empty($_POST['password']) && !empty($_POST['phone']) && !empty($_POST['email']) && !empty($_POST['dob']) && !empty($_POST['Confirm'])) {
        if ($_POST['password'] !== $_POST['Confirm']) {
            $_SESSION["errMsg"] = "password and confirm password not match";
            header("Location: ../Views/Auth/register.php");
            exit();
        }
        if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $_SESSION["errMsg"] = "Invalid email format";
            header("Location: ../Views/Auth/register.php");
            exit();
        }
        
        $customer = new Customer();
        $auth = new AuthController();
        $customer->email = $_POST['email'];
        $customer->password = $_POST['password'];
        $customer->phone = $_POST['phone'];
        $customer->name = $_POST['username'];
        $customer->dob = $_POST['dob'];

        if (!$auth->register($customer)) {
            $_SESSION["errMsg"] = $_SESSION["errMsg"] ?? "Registration failed";
            header("Location: ../Views/Auth/register.php");
            exit();
        } else {
            header("Location: ../Views/Auth/login.php");
            exit();
        }
    } else {
        $_SESSION["errMsg"] = "please fill all fields";
        header("Location: ../Views/Auth/register.php");
        exit();
    }
} else {
    $_SESSION["errMsg"] = "please fill all fields";
    header("Location: ../Views/Auth/register.php");
    exit();
}
