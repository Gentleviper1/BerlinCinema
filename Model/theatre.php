<?php
class Theatre
{
    private $theatreid;
    private $location  ;
    private $name;

    public function getTheatreid()
    {
        return $this->theatreid;
    }

    public function setTheatreid($theatreid)
    {
        $this->theatreid = $theatreid;
    }

    public function getLocation()
    {
        return $this->location;
    }

    public function setLocation($location)
    {
        $this->location = $location;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }
}
?>