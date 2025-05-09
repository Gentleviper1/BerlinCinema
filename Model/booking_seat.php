<?php
class Booking_seat
{
    private $booking_id;
    private $seat_id;
  



    public function getbooking_id()
    {
        return $this->booking_id;
    }

    public function getseat_id()
    {
        return $this->seat_id;
    }


    public function setbooking_id($booking_id)
    {
        $this->booking_id= $booking_id;
    }

    public function setAfirstname($seat_id)
    {
        $this->seat_id = $seat_id;
    }
}
?>