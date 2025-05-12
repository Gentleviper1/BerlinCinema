<?php
class Movie
{
    private $movieId ;
    public $title;
    public $cast_members;
    public $poster_url;
    public $price	;
    public $genre;
    public $trailer ;
    public $category;
    public $description;
    public $rdate;
    public $duration;
    public $is_active;

    public function getMovieId()
    {
        return $this->movieId;
    }

    public function setMovieId($movieId)
    {
        $this->movieId = $movieId;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getCast_members()
    {
        return $this->cast_members;
    }

    public function setCast_members($cast_members)
    {
        $this->cast_members = $cast_members;
    }

    public function getPoster_url()
    {
        return $this->poster_url;
    }

    public function setPoster_url($poster_url)
    {
        $this->poster_url = $poster_url;
    }

    public function getPrice()
    {
        return $this->price;
    }

    public function setPrice($price)
    {
        $this->price = $price;
    }

    public function getGenre()
    {
        return $this->genre;
    }

    public function setGenre($genre)
    {
        $this->genre = $genre;
    }

    public function getTrailer()
    {
        return $this->trailer;
    }

    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getRdate()
    {
        return $this->rdate;
    }

    public function setRdate($rdate)
    {
        $this->rdate = $rdate;
    }

    public function getDuration()
    {
        return $this->duration;
    }

    public function setDuration($duration)
    {
        $this->duration = $duration;
    }

    public function getIs_active()
    {
        return $this->is_active;
    }

    public function setIs_active($is_active)
    {
        $this->is_active = $is_active;
    }
}
?>