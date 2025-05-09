<?php
require_once '../../Model/Customer.php';
require_once '../../Control/AuthController.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if (!empty($username) && !empty($password)) {
        $Customer = new Customer();
        $AuthController = new AuthController();

        $Customer->setemail($username);
        $Customer->setpassword($password);

        if ($AuthController->login($Customer)) {
            header("Location: ../Admin/index.php");
            exit();
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }
    } else {
        echo "<script>alert('Please enter username and password');</script>";
    }
}
?>
