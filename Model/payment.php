<?php
class Payment
{
    private $paymentid;
    private $booking_id ;
    private $amount;
    private $method;
    private $status	;
    private $payment_date ;
    // private $password  ;

    public function getPaymentid()
    {
        return $this->paymentid;
    }

    public function setPaymentid($paymentid)
    {
        $this->paymentid = $paymentid;
    }

    public function getBooking_id()
    {
        return $this->booking_id;
    }

    public function setBooking_id($booking_id)
    {
        $this->booking_id = $booking_id;
    }

    public function getAmount()
    {
        return $this->amount;
    }

    public function setAmount($amount)
    {
        $this->amount = $amount;
    }

    public function getMethod()
    {
        return $this->method;
    }

    public function setMethod($method)
    {
        $this->method = $method;
    }

    public function getStatus()
    {
        return $this->status;
    }

    public function setStatus($status)
    {
        $this->status = $status;
    }

    public function getPayment_date()
    {
        return $this->payment_date;
    }

    public function setPayment_date($payment_date)
    {
        $this->payment_date = $payment_date;
    }
}
?>