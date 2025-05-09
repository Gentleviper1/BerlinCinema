<?php
class Seat
{
    private $seatid;
    private $seat_number  ;
    private $seat_row;
    private $type;
    private $is_available	;
    private $hallid ;
   
    public function getSeatid()
    {
        return $this->seatid;
    }

    public function setSeatid($seatid)
    {
        $this->seatid = $seatid;
    }

    public function getSeat_number()
    {
        return $this->seat_number;
    }

    public function setSeat_number($seat_number)
    {
        $this->seat_number = $seat_number;
    }

    public function getSeat_row()
    {
        return $this->seat_row;
    }

    public function setSeat_row($seat_row)
    {
        $this->seat_row = $seat_row;
    }

    public function getType()
    {
        return $this->type;
    }

    public function setType($type)
    {
        $this->type = $type;
    }

    public function getIs_available()
    {
        return $this->is_available;
    }

    public function setIs_available($is_available)
    {
        $this->is_available = $is_available;
    }

    public function getHallid()
    {
        return $this->hallid;
    }

    public function setHallid($hallid)
    {
        $this->hallid = $hallid;
    }
}
?>