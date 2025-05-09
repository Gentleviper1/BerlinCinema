<?php
class Registeration
{
    private $id;
    private $fullname;  
    private $dob;
    private $phone;
    private $email;
    private $password;
    private $confirmPassword;

    public function __construct($fullname, $dob,$phone, $email, $password, $confirmPassword)
    {
        $this->id = null; // Assuming ID is auto-incremented in the database
        $this->fullname = $fullname;
        $this->dob = $dob;
        $this->phone = $phone;
        $this->email = $email;
        $this->password = $password;
        $this->confirmPassword = $confirmPassword;
    }

   
    public function getId()
    {
        return $this->id;
    }
    public function getFullname()
    {
        return $this->fullname;
    }
    public function getDob()
    {
        return $this->dob;
    }
    public function getPhone()
    {
        return $this->phone;
    }
    public function getEmail()
    {
        return $this->email;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getConfirmPassword()
    {
        return $this->confirmPassword;
    }
}
?>