<?php
class Booking
{
    private $book_id;
    private $user_id;
    private $screening_id;
    private $booking_date;
    private $booking_status;
    private $total_amount;

    public function getbook_id()
    {
        return $this->book_id;
    }

    public function getuser_id()
    {
        return $this->user_id;
    }

    public function getscreening_id()
    {
        return $this->screening_id;
    }

    public function getbooking_date()
    {
        return $this->booking_date;
    }

    public function getbooking_status()
    {
        return $this->booking_status;
    }

    public function gettotal_amount()
    {
        return $this->total_amount;
    }

    public function setbook_id($book_id)
    {
        $this->book_id= $book_id;
    }

    public function setuser_id($user_id)
    {
        $this->user_id = $user_id;
    }
    public function setscreening_id($screening_id)
    {
     $this-> screening_id = $screening_id;
    }
    public function setbooking_date($booking_date)
    {
     $this-> booking_date = $booking_date;
    }           
     public function setbooking_status($booking_status)
     {
      $this-> booking_status = $booking_status;
    }
     public function settotal_amount($total_amount)
     {
         $this-> total_amount = $total_amount;
     }



}
?>