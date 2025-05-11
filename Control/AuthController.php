<?php
require_once __DIR__ . '/../Model/Customer.php';
require_once __DIR__ . '/DBController.php';
class AuthController
{
   protected $db;

   public function login(Customer $customer)
   {
      $this->db = new DBController();
      if ($this->db->openConnection()) {
         $query = "select * from customer where email = '$customer->email' and password = '$customer->password'";
         $result = $this->db->select($query);

         if ($result === false) {
            echo "Erorr in query";
            return false;
         } else {
            if (count($result) == 0) {
               session_start();
               $_SESSION["errMsg"] = "you have entered wrong email or password ";
               return false;
            } else {

               $_SESSION["CustomerId"] = $result[0]["userid"];
               $_SESSION["CustomerRoleId"] = $result[0]["roleId"];
               $_SESSION["CustomerName"] = $result[0]["firstname"];
               $_SESSION["CustomerEmail"] = $result[0]["email"];

               // $_SESSION["CustomerStatus"]=$result[0]["userstatus"];

               return true;
            }
         }
      } else {
         echo "Error in connecting to database";
         return false;
      }
   }
   public function logout()
   {
      session_start();
      unset($_SESSION["CustomerId"]);
      unset($_SESSION["CustomerRoleId"]);
      unset($_SESSION["CustomerName"]);
      unset($_SESSION["CustomerEmail"]);
      session_destroy();
      header("Location: ../Views/Auth/login.php");
   }


   
public function register(Customer $customer)
{
   $this->db = new DBController();
   if ($this->db->openConnection()) {

      // Check if email already exists
      $emailCheckQuery = "SELECT * FROM Customer WHERE email = '$customer->email'";
      $existingUser = $this->db->select($emailCheckQuery);

      if (!empty($existingUser)) {
         session_start();
         $_SESSION["errMsg"] = "Email is already registered. Please use another one.";
         $this->db->closeConnection();
         return false;
      }

      $query = "INSERT INTO Customer (userid, roleid, name, dob, userstatus, email, phone, password)
                VALUES (NULL, '1', '$customer->name', '$customer->dob', '1', '$customer->email', '$customer->phone', '$customer->password')";

      $result = $this->db->insert($query);
      if ($result != false) {
         $this->db->closeConnection();
         return true;
      } else {
         session_start();
         $_SESSION["errMsg"] = "Something went wrong during registration.";
         $this->db->closeConnection();
         return false;
      }
   } else {
      echo "Error in connecting to database";
      return false;
   }
}


}