<?php
class DBController
{
    public $dbHost = "localhost";
    public $dbUser = "root";
    public $dbPass = "";
    public $dbName = "OurWebsite";
   
    public $conn;

    public function openConnection()
    {
        // First connect without database
        $this->conn = new mysqli($this->dbHost, $this->dbUser, $this->dbPass);
        
        if ($this->conn->connect_error) {
            echo "Error in connection: " . $this->conn->connect_error;
            return false;
        }

        // Create database if it doesn't exist
        $sql = "CREATE DATABASE IF NOT EXISTS " . $this->dbName;
        if ($this->conn->query($sql) === TRUE) {
            // Select the database
            $this->conn->select_db($this->dbName);
            return true;
        } else {
            echo "Error creating database: " . $this->conn->error;
            return false;
        }
    }

    public function closeConnection()
    {
        if($this->conn) {       
            $this->conn->close();
        } else {
            echo "Connection is not opened";
        }
    }

    public function select($qry)
    {
        $result = $this->conn->query($qry);
        
        if (!$result) {
            echo "Error: " . mysqli_error($this->conn); 
            return false;
        } else {
            return $result->fetch_all(MYSQLI_ASSOC);
        }
    }

    public function insert($qry)
    {
        try {
            $result = $this->conn->query($qry);
            if (!$result) {
                return false;
            } else {
                return $this->conn->insert_id;
            }
        } catch (mysqli_sql_exception $e) {
            return false;
        }
    }
}
?>