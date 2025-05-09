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
        $this->conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass, $this->dbName);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getConnection()
    {
        return $this->conn;
    }

    public function closeConnection()
    {if ($this->conn) {
            $this->conn->close();
        }
        else{
            echo "Connection is already closed.";
        }
        
    }
    public function executeQuery($query)
    {
        $result = $this->conn->query($query);
        if ($result === TRUE) {
            return true;
        } else {
            echo "Error: " . $this->conn->error;
            return false;
        }
    }
    public function fetchData($query)
    {
        $result = $this->conn->query($query);
        if ($result) {
            $data = [];
            while ($row = $result->fetch_assoc()) {
                $data[] = $row;
            }
            return $data;
        } else {
            echo "Error: " . $this->conn->error;
            return false;
        }
    }
}
?>