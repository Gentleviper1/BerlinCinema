<?php
class Screens
{
    private $screenid;
    private $theatreid  ;
    private $name;
    private $start_time;
    private $end_time	;
    private $hallid ;
    private $movieid   ;
    private $avalable_seats;
    
    public function getScreenid()
    {
        return $this->screenid;
    }

    public function setScreenid($screenid)
    {
        $this->screenid = $screenid;
    }

    public function getTheatreid()
    {
        return $this->theatreid;
    }

    public function setTheatreid($theatreid)
    {
        $this->theatreid = $theatreid;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getStart_time()
    {
        return $this->start_time;
    }

    public function setStart_time($start_time)
    {
        $this->start_time = $start_time;
    }

    public function getEnd_time()
    {
        return $this->end_time;
    }

    public function setEnd_time($end_time)
    {
        $this->end_time = $end_time;
    }

    public function getHallid()
    {
        return $this->hallid;
    }

    public function setHallid($hallid)
    {
        $this->hallid = $hallid;
    }

    public function getMovieid()
    {
        return $this->movieid;
    }

    public function setMovieid($movieid)
    {
        $this->movieid = $movieid;
    }

    public function getAvalable_seats()
    {
        return $this->avalable_seats;
    }

    public function setAvalable_seats($avalable_seats)
    {
        $this->avalable_seats = $avalable_seats;
    }
}
?>