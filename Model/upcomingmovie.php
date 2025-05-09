<?php
class Upcomingmovies
{
    private $upcomingId;
    private $title   ;
    private $genre;
    private $trailer;
    private $category;
    private $comingdate;
    private $adminId;
    private $attachment_url;

    public function __construct($title, $genre, $trailer, $category, $comingdate, $adminId, $attachment_url)
    {
        $this->upcomingId = null; // Assuming ID is auto-incremented in the database
        $this->title = $title;
        $this->genre = $genre;
        $this->trailer = $trailer;
        $this->category = $category;
        $this->comingdate = $comingdate;
        $this->adminId = $adminId;
        $this->attachment_url = $attachment_url;
    }
    public function getUpcomingId()
    {
        return $this->upcomingId;
    }
    public function getTitle()
    {
        return $this->title;
    }
    public function getGenre()
    {
        return $this->genre;
    }       
    public function getTrailer()
    {
        return $this->trailer;
    }
    public function getCategory()
    {
        return $this->category;
    }
    public function getComingdate()
    {
        return $this->comingdate;
    }
   
    public function getAdminId()
    {
        return $this->adminId;
    }
    public function getAttachmentUrl()
    {
        return $this->attachment_url;
    }
    public function setUpcomingId($upcomingId)
    {
        $this->upcomingId = $upcomingId;
    }
    public function setTitle($title)
    {
        $this->title = $title;
    }
    public function setGenre($genre)
    {
        $this->genre = $genre;
    }
    public function setTrailer($trailer)
    {
        $this->trailer = $trailer;
    }
    public function setCategory($category)
    {
        $this->category = $category;
    }
    public function setComingdate($comingdate)
    {
        $this->comingdate = $comingdate;
    }
    public function setAdminId($adminId)
    {
        $this->adminId = $adminId;
    }
    public function setAttachmentUrl($attachment_url)
    {
        $this->attachment_url = $attachment_url;
    }
    public function getUpcomingMovieDetails()
    {
        return [
            'upcomingId' => $this->upcomingId,
            'title' => $this->title,
            'genre' => $this->genre,
            'trailer' => $this->trailer,
            'category' => $this->category,
            'comingdate' => $this->comingdate,
            'adminId' => $this->adminId,
            'attachment_url' => $this->attachment_url
        ];
    }
    public function setUpcomingMovieDetails($upcomingId, $title, $genre, $trailer, $category, $comingdate, $adminId, $attachment_url)
    {
        $this->upcomingId = $upcomingId;
        $this->title = $title;
        $this->genre = $genre;
        $this->trailer = $trailer;
        $this->category = $category;
        $this->comingdate = $comingdate;
        $this->adminId = $adminId;
        $this->attachment_url = $attachment_url;
    }
  
    
    
}
?>