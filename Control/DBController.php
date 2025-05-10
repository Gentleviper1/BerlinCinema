<?php
 class DBController
{
    public $dbHost = "localhost";
    public $dbUser =   "root";
    public $dbPass = "";
    public $dbName = "OurWebsite";
   
    public $conn;

        public function openConnection()
        {
             $this-> conn = new mysqli($this-> dbHost, $this-> dbUser, $this-> dbPass, $this-> dbName);
             if ($this->conn->connect_error) {
                echo "Error in connection : ". $this->conn->connect_error;
                return false;
             }
             else {
                return true;
             }
        }

     public function closeConnection()
     {
        if($this->conn)
        {       
            $this->conn->close();

        }
        else 
        {
            echo " Connection is not opend";
         }
     }

        public function select($qry)
        {
             $result = $this-> conn-> query($qry);
             if (!$result)
             {
                echo "Error : ".mysqli_error( $this->conn); 
                return false;
             }
             else
             {
                 return $result->fetch_all(MYSQLI_ASSOC);

             }
        }
 
}
?>