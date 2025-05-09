<?php
class Login
{
    private $userid ;
    private $id;
    private $username;
    private $usertype;
    private $userstatus	;
    private $last_login ;
    private $password ;
    
    public function getUserid()
    {
        return $this->userid;
    }

    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($username)
    {
        $this->username = $username;
    }

    public function getUsertype()
    {
        return $this->usertype;
    }

    public function setUsertype($usertype)
    {
        $this->usertype = $usertype;
    }

    public function getUserstatus()
    {
        return $this->userstatus;
    }

    public function setUserstatus($userstatus)
    {
        $this->userstatus = $userstatus;
    }

    public function getLast_login()
    {
        return $this->last_login;
    }

    public function setLast_login($last_login)
    {
        $this->last_login = $last_login;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function setPassword($password)
    {
        $this->password = $password;
    }
}
?>