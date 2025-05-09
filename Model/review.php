<?php
class Review
{
    private $reviewid;
    private $userid ;
    private $content;
    private $movieid;
    private $rating	;
    private $created_at ;
    // private $password  ;

    public function getReviewid()
    {
        return $this->reviewid;
    }

    public function setReviewid($reviewid)
    {
        $this->reviewid = $reviewid;
    }

    public function getUserid()
    {
        return $this->userid;
    }

    public function setUserid($userid)
    {
        $this->userid = $userid;
    }

    public function getContent()
    {
        return $this->content;
    }

    public function setContent($content)
    {
        $this->content = $content;
    }

    public function getMovieid()
    {
        return $this->movieid;
    }

    public function setMovieid($movieid)
    {
        $this->movieid = $movieid;
    }

    public function getRating()
    {
        return $this->rating;
    }

    public function setRating($rating)
    {
        $this->rating = $rating;
    }

    public function getCreated_at()
    {
        return $this->created_at;
    }

    public function setCreated_at($created_at)
    {
        $this->created_at = $created_at;
    }
}
?>