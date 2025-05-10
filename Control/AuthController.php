<?php
require_once __DIR__ . '/../Model/Customer.php';
require_once __DIR__ . '/DBController.php';
class AuthController
{
   protected $db;

     public function login(Customer $customer)
     {
        $this->db = new DBController();
        if( $this->db->openConnection())
        {   
                $query = "select * from customer where email = '$customer->username' and password = '$customer->password'"; 
                $result = $this->db->select( $query );
               // print_r( $result );
             if($result===false)
              {
                 echo "Erorr in query";
                 return false;   
              }
             else
             {
                if(count($result)==0)
                {
                    session_start();
                    $_SESSION["errMsg"]="you have entered wrong email or password ";
                    return false;
                }
                else
                {       
                  // print_r($result);
                    $_SESSION["CustomerId"]=$result[0]["userid"];
                    $_SESSION["CustomerName"]=$result[0]["firstname"];
                    $_SESSION["CustomerEmail"]=$result[0]["email"];
                   // $_SESSION["CustomerStatus"]=$result[0]["userstatus"];

                    return true;
                }
             }

        }
        else 
        {
            echo "Error in connecting to database"; 
            return false;
        }
        
     }
    
}
