<?php
require_once __DIR__ . '/../Model/Customer.php';
require_once __DIR__ . '/DBController.php';
class AuthController
{
    protected $db;
    public function login(Customer $Customer)
    {
        $this->db = new DBController;
       if($this->db->openConnection()){
        $query = "SELECT * FROM customer WHERE email = '" . $Customer->getemail() . "' AND password = '" . $Customer->getpassword() . "'";
        $result = $this->db->fetchData($query);
        if(!$result){
            echo "Error in Query: " ;
            return false;
        }else{
            if (count($result) == 0) {
                // Assuming you want to set session variables for the logged-in user
                session_start();
                $_SESSION['err_Msq'] = "You have entered Wrong Email or Password"; // Store the first result in session
                return false;
            } else {
               print_r($result);

                session_start();
                $_SESSION['email'] = $result[0]['email']; // Store the first result in session
              
               
                $_SESSION['id'] = $result[0]['id']; // Store the first result in session
                
    
               
               
                return true;
            }
        }


       }
      
        
    }
}
