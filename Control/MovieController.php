<?php


session_start();
include '../../Control/DBController.php';
include_once('../../Model/movie.php');

$movies = new Movie();

$conn = new DBController();
$conn->openConnection();

$movies->setTitle($_POST['name']);
$movies->setCast_members($_POST['cast']);
$movies->setPoster_url($_POST['image']);
$movies->setPrice($_POST['price']);
$movies->setGenre($_POST['genre']);
$movies->setTrailer($_POST['trailer']);
$movies->setCategory($_POST['Category']);
$movies->setDescription($_POST['description']);
$movies->setRdate($_POST['rdate']);
$movies->setDuration($_POST['duration']);
$movies->setIs_active(1);

$title = $movies->getTitle();
$cast = $movies->getCast_members();
$poster = $movies->getPoster_url();
$price =$movies->getPrice();
$genre = $movies->getGenre();
$trailer = $movies->getTrailer();
$category = $movies->getCategory();
$description = $movies->getDescription();
$rdate = $movies->getRdate();
$duration = $movies->getDuration();
$is_active = $movies->getIs_active();

$sql = "INSERT INTO movie (title, cast_members, poster_url, price, genre, trailer, category, description, rdate, duration, is_active) VALUES ('$title', '$cast', '$poster', '$price', '$genre', '$trailer', '$category', '$description', '$rdate', '$duration', $is_active)";

$conn->insert($sql);
$conn->closeConnection();

$_SESSION['success'] = "Movie Added";
header('location:add-movie.php');
