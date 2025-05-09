<?php
class Theatrehall
{
    private $hallId;
    private $theatreId   ;
    private $hall_no;
    private $seat_count;

    public function getHallId()
    {
        return $this->hallId;
    }

    public function setHallId($hallId)
    {
        $this->hallId = $hallId;
    }

    public function getTheatreId()
    {
        return $this->theatreId;
    }

    public function setTheatreId($theatreId)
    {
        $this->theatreId = $theatreId;
    }

    public function getHall_no()
    {
        return $this->hall_no;
    }

    public function setHall_no($hall_no)
    {
        $this->hall_no = $hall_no;
    }

    public function getSeat_count()
    {
        return $this->seat_count;
    }

    public function setSeat_count($seat_count)
    {
        $this->seat_count = $seat_count;
    }
}
?>