<?php
class Movie_theatre
{
    private $movieId ;
    private $theatreid ;
    
    public function getMovieId()
    {
        return $this->movieId;
    }

    public function setMovieId($movieId)
    {
        $this->movieId = $movieId;
    }

    public function getTheatreid()
    {
        return $this->theatreid;
    }

    public function setTheatreid($theatreid)
    {
        $this->theatreid = $theatreid;
    }
}
?>