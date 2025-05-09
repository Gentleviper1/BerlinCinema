<?php
class Admin
{
    private $adminId;
    private $Afirstname;
    private $Alastname;
    private $dob;
    private $email;
    private $role;
    private $isActive;
    private $phone;
    private $password;

    // Getters
    public function getAdminId()
    {
        return $this->adminId;
    }

    public function getAfirstname()
    {
        return $this->Afirstname;
    }

    public function getAlastname()
    {
        return $this->Alastname;
    }

    public function getDob()
    {
        return $this->dob;
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function getRole()
    {
        return $this->role;
    }

    public function getIsActive()
    {
        return $this->isActive;
    }

    public function getPhone()
    {
        return $this->phone;
    }

    public function getPassword()
    {
        return $this->password;
    }

    // Setters
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
    }

    public function setAfirstname($Afirstname)
    {
        $this->Afirstname = $Afirstname;
    }

    public function setAlastname($Alastname)
    {
        $this->Alastname = $Alastname;
    }

    public function setDob($dob)
    {
        $this->dob = $dob;
    }

    public function setEmail($email)
    {
        $this->email = $email;
    }

    public function setRole($role)
    {
        $this->role = $role;
    }

    public function setIsActive($isActive)
    {
        $this->isActive = $isActive;
    }

    public function setPhone($phone)
    {
        $this->phone = $phone;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
?>