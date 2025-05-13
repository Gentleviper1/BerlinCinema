<?php

include_once __DIR__ . '/DBController.php';
include_once __DIR__ . '/../Model/movie.php';

// Function to create movie table if it doesn't exist
function createMovieTable() {
    $conn = new DBController();
    $conn->openConnection();
    
    $sql = "CREATE TABLE IF NOT EXISTS movie (
        movie_id INT AUTO_INCREMENT PRIMARY KEY,
        title VARCHAR(255) NOT NULL,
        cast_members TEXT,
        poster_url TEXT,
        price DECIMAL(10,2),
        genre VARCHAR(100),
        trailer TEXT,
        category VARCHAR(50),
        description TEXT,
        rdate DATE,
        duration INT,
        is_active TINYINT(1) DEFAULT 1
    )";
    
    $conn->insert($sql);
    $conn->closeConnection();
}

// Create the table
createMovieTable();

// Function to get all active movies
function getAllMovies() {
    $conn = new DBController();
    if (!$conn->openConnection()) {
        error_log("Failed to connect to database");
        return [];
    }
    
    // Debug information
    error_log("Attempting to fetch all movies from database");
    
    // Modified query to ensure we get all movies
    $sql = "SELECT * FROM movie WHERE is_active = 1 OR is_active = 0";
    $result = $conn->select($sql);
    
    // Debug information
    error_log("Number of movies found: " . ($result ? count($result) : 0));
    error_log("Query result: " . print_r($result, true));
    
    $conn->closeConnection();
    
    if (!$result) {
        error_log("No movies found or error in query");
        return [];
    }
    
    return $result;
}

// Function to get movie by ID
function getMovieById($movieId) {
    $conn = new DBController();
    if (!$conn->openConnection()) {
        error_log("Failed to connect to database");
        return null;
    }
    
    $movieId = $conn->conn->real_escape_string($movieId);
    $sql = "SELECT * FROM movie WHERE movie_id = '$movieId'";
    $result = $conn->select($sql);
    
    $conn->closeConnection();
    return $result ? $result[0] : null;
}

// Function to insert sample movies
function insertSampleMovies() {
    $conn = new DBController();
    $conn->openConnection();
    
    $movies = [
        [
            'title' => 'The Dark Knight',
            'cast_members' => 'Christian Bale, Heath Ledger, Aaron Eckhart',
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMTMxNTMwODM0NF5BMl5BanBnXkFtZTcwODAyMTk2Mw@@._V1_.jpg',
            'price' => '12.99',
            'genre' => 'Action, Crime, Drama',
            'trailer' => 'https://www.youtube.com/watch?v=EXeTwQWrcwY',
            'category' => 'Action',
            'description' => 'When the menace known as the Joker wreaks havoc and chaos on the people of Gotham, Batman must accept one of the greatest psychological and physical tests of his ability to fight injustice.',
            'rdate' => '2008-07-18',
            'duration' => '152',
            'is_active' => 1
        ],
        [
            'title' => 'Inception',
            'cast_members' => 'Leonardo DiCaprio, Joseph Gordon-Levitt, Ellen Page',
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMjAxMzY3NjcxNF5BMl5BanBnXkFtZTcwNTI5OTM0Mw@@._V1_.jpg',
            'price' => '11.99',
            'genre' => 'Action, Adventure, Sci-Fi',
            'trailer' => 'https://www.youtube.com/watch?v=YoHD9XEInc0',
            'category' => 'Sci-Fi',
            'description' => 'A thief who steals corporate secrets through the use of dream-sharing technology is given the inverse task of planting an idea into the mind of a C.E.O.',
            'rdate' => '2010-07-16',
            'duration' => '148',
            'is_active' => 1
        ],
        [
            'title' => 'The Shawshank Redemption',
            'cast_members' => 'Tim Robbins, Morgan Freeman, Bob Gunton',
            'poster_url' => 'https://m.media-amazon.com/images/M/MV5BNDE3ODcxYzMtY2YzZC00NmNlLWJiNDMtZDViZWM2MzIxZDYwXkEyXkFqcGdeQXVyNjAwNDUxODI@._V1_.jpg',
            'price' => '9.99',
            'genre' => 'Drama',
            'trailer' => 'https://www.youtube.com/watch?v=6hB3S9bIaco',
            'category' => 'Drama',
            'description' => 'Two imprisoned men bond over a number of years, finding solace and eventual redemption through acts of common decency.',
            'rdate' => '1994-09-23',
            'duration' => '142',
            'is_active' => 1
        ]
    ];
    
    foreach ($movies as $movie) {
        $sql = "INSERT INTO movie (title, cast_members, poster_url, price, genre, trailer, category, description, rdate, duration, is_active) 
                VALUES ('{$movie['title']}', '{$movie['cast_members']}', '{$movie['poster_url']}', '{$movie['price']}', 
                        '{$movie['genre']}', '{$movie['trailer']}', '{$movie['category']}', '{$movie['description']}', 
                        '{$movie['rdate']}', '{$movie['duration']}', {$movie['is_active']})";
        
        $conn->insert($sql);
    }
    
    $conn->closeConnection();
}

// Insert sample movies

function getMoviesByCategory($category) {
    $conn = new DBController();
    if (!$conn->openConnection()) {
        error_log("Failed to connect to database");
        return [];
    }
    
    $category = $conn->conn->real_escape_string($category);
    $sql = "SELECT * FROM movie WHERE category = '$category'";
    $result = $conn->select($sql);
    
    $conn->closeConnection();
    return $result ? $result : [];
}

function getLatestMovies() {
    $conn = new DBController();
    if (!$conn->openConnection()) {
        error_log("Failed to connect to database");
        return [];
    }
    
    $sql = "SELECT * FROM movie ORDER BY rdate DESC LIMIT 10";
    $result = $conn->select($sql);
    
    $conn->closeConnection();
    return $result ? $result : [];
}

function getComingSoonMovies() {
    $conn = new DBController();
    if (!$conn->openConnection()) {
        error_log("Failed to connect to database");
        return [];
    }
    
    $currentDate = date('Y-m-d');
    $sql = "SELECT * FROM movie WHERE rdate > '$currentDate' ORDER BY rdate ASC";
    $result = $conn->select($sql);
    
    $conn->closeConnection();
    return $result ? $result : [];
}

function getTopRatedMovies() {
    $conn = new DBController();
    if (!$conn->openConnection()) {
        error_log("Failed to connect to database");
        return [];
    }
    
    $sql = "SELECT * FROM movie ORDER BY rating DESC LIMIT 10";
    $result = $conn->select($sql);
    
    $conn->closeConnection();
    return $result ? $result : [];
}

function getRecentlyReleasedMovies() {
    $conn = new DBController();
    if (!$conn->openConnection()) {
        error_log("Failed to connect to database");
        return [];
    }
    
    $currentDate = date('Y-m-d');
    $sql = "SELECT * FROM movie WHERE rdate <= '$currentDate' ORDER BY rdate DESC LIMIT 10";
    $result = $conn->select($sql);
    
    $conn->closeConnection();
    return $result ? $result : [];
}

function insertOppenheimerMovie() {
    $conn = new DBController();
    if (!$conn->openConnection()) {
        error_log("Failed to connect to database");
        return false;
    }
    
    $movie = [
        'title' => 'Oppenheimer',
        'cast_members' => 'Cillian Murphy, Emily Blunt, Matt Damon, Robert Downey Jr.',
        'poster_url' => 'https://m.media-amazon.com/images/M/MV5BMDBmYTZjNjUtN2M1MS00MTQ2LTk2ODgtNzc2M2QyZGE5NTVjXkEyXkFqcGdeQXVyNzAwMjU2MTY@._V1_.jpg',
        'price' => '14.99',
        'genre' => 'Biography, Drama, History',
        'trailer' => 'https://www.youtube.com/watch?v=uYPbbksJxIg',
        'category' => 'Drama',
        'description' => 'The story of American scientist J. Robert Oppenheimer and his role in the development of the atomic bomb.',
        'rdate' => '2023-07-21',
        'duration' => '180',
        'is_active' => 1
    ];
    
    $sql = "INSERT INTO movie (title, cast_members, poster_url, price, genre, trailer, category, description, rdate, duration, is_active) 
            VALUES ('{$movie['title']}', '{$movie['cast_members']}', '{$movie['poster_url']}', '{$movie['price']}', 
                    '{$movie['genre']}', '{$movie['trailer']}', '{$movie['category']}', '{$movie['description']}', 
                    '{$movie['rdate']}', '{$movie['duration']}', {$movie['is_active']})";
    
    $result = $conn->insert($sql);
    $conn->closeConnection();
    return $result;
}

// Call the function to insert the movie


?>
