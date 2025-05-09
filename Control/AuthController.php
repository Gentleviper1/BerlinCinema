<?php
require_once __DIR__ . '/../Model/Customer.php';
require_once __DIR__ . '/DBController.php';
class AuthController{
    protected $db;
    public function login(Customer $Customer)
    {
        $this->db=new DBController;
        if($this->db->openConnection()){
            $query="SELECT * FROM customer WHERE email='".$Customer->getemail()."' AND password='".$Customer->getpassword()."'";
            $result= $this->db->executeQuery($query);
            if($result){
                return true;
            }else{
                echo "Login failed: " . $this->db->getConnection()->error;
                return false;
            }
        }else{
            return false;
        }   
    }
}
?>
