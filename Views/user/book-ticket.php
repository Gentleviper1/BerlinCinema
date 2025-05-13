<?php
session_start();
include_once __DIR__ . '/../../Control/MovieController.php';

// Get movie ID from URL
$movieId = isset($_GET['id']) ? $_GET['id'] : null;

// Get movie details
$movie = $movieId ? getMovieById($movieId) : null;

if (!$movie) {
    header('Location: movies.php');
    exit;
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Book Tickets - <?php echo htmlspecialchars($movie['title']); ?></title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="assets/img/favcion.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
    <!-- Slick nav CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/slicknav.min.css" media="all" />
    <!-- Iconfont CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/icofont.css" media="all" />
    <style>
        body {
            background: #121212;
            color: #fff;
        }

        .booking-container {
            max-width: 1200px;
            margin: 50px auto;
            padding: 20px;
        }

        .movie-info {
            display: flex;
            gap: 30px;
            margin-bottom: 40px;
            background: #1a1a1a;
            padding: 20px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .movie-poster {
            width: 300px;
            height: 450px;
            border-radius: 10px;
            overflow: hidden;
        }

        .movie-poster img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .movie-details {
            flex: 1;
        }

        .movie-title {
            font-size: 32px;
            font-weight: 700;
            margin-bottom: 20px;
            color: #fff;
        }

        .movie-meta {
            display: flex;
            gap: 15px;
            margin-bottom: 20px;
        }

        .movie-meta span {
            background: rgba(255, 255, 255, 0.1);
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 14px;
            color: #fff;
        }

        .booking-form {
            background: #1a1a1a;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }

        .form-group {
            margin-bottom: 20px;
        }

        .form-group label {
            display: block;
            /* margin-bottom: 10px; */
            color: #fff;
            font-weight: 500;
        }

        .form-control {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            color: #fff;
            /* padding: 12px; */
            border-radius: 8px;
            width: 100%;
        }

        .form-control:focus {
            background: rgba(255, 255, 255, 0.15);
            border-color: #e50914;
            color: rgb(90, 85, 85);
            outline: none;
        }

        .btn-book {
            background:rgb(90, 85, 85);
            color: #fff;
            padding: 15px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            width: 100%;
        }

        .btn-book:hover {
            background: #f40612;
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(229, 9, 20, 0.3);
        }

        .seat-layout {
            margin: 30px 0;
            text-align: center;
        }

        /* .screen {
            background: rgb(90, 85, 85);
            height: 70px;
            width: 100%;
            margin: 15px 0;
            transform: rotateX(-30deg);
            box-shadow: 0 3px 10px rgba(255, 255, 255, 0.7);
        } */

        .seats {
            display: grid;
            grid-template-columns: repeat(8, 1fr);
            gap: 10px;
            margin: 20px 0;
        }

        .seat {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 5px;
            padding: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .seat:hover {
            background: rgba(229, 9, 20, 0.2);
            border-color: #e50914;
        }

        .seat.selected {
            background: #e50914;
            border-color: #e50914;
        }

        .seat.occupied {
            background: rgba(255, 255, 255, 0.2);
            cursor: not-allowed;
        }

        .legend {
            display: flex;
            justify-content: center;
            gap: 20px;
            margin-top: 20px;
        }

        .legend-item {
            display: flex;
            align-items: center;
            gap: 5px;
        }

        .legend-box {
            width: 20px;
            height: 20px;
            border-radius: 3px;
        }

        .legend-box.available {
            background: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .legend-box.selected {
            background: #e50914;
        }

        .legend-box.occupied {
            background: rgba(255, 255, 255, 0.2);
        }
    </style>
</head>
<body>
    <div class="booking-container">
        <div class="movie-info">
            <div class="movie-poster">
                <img src="<?php echo htmlspecialchars($movie['poster_url']); ?>" alt="<?php echo htmlspecialchars($movie['title']); ?>">
            </div>
            <div class="movie-details">
                <h1 class="movie-title"><?php echo htmlspecialchars($movie['title']); ?></h1>
                <div class="movie-meta">
                    <span><i class="icofont icofont-film"></i> <?php echo htmlspecialchars($movie['genre']); ?></span>
                    <span><i class="icofont icofont-clock-time"></i> <?php echo htmlspecialchars($movie['duration']); ?> min</span>
                    <span><i class="icofont icofont-ticket"></i> $<?php echo htmlspecialchars($movie['price']); ?></span>
                </div>
                <p><?php echo htmlspecialchars($movie['description']); ?></p>
            </div>
        </div>

        <div class="booking-form">
            <form action="process-booking.php" method="POST">
                <input type="hidden" name="movie_id" value="<?php echo $movie['movie_id']; ?>">
                
                <div class="form-group">
                    <label>Select Date</label>
                    <input type="date" name="date" class="form-control" required min="<?php echo date('Y-m-d'); ?>">
                </div>

                <div class="form-group">
                    <label>Select Time</label>
                    <select name="time" class="form-control" required>
                        <option value="">Choose a time</option>
                        <option value="10:00">10:00 AM</option>
                        <option value="13:00">1:00 PM</option>
                        <option value="16:00">4:00 PM</option>
                        <option value="19:00">7:00 PM</option>
                        <option value="22:00">10:00 PM</option>
                    </select>
                </div>

                <div class="seat-layout">
                    <div class="screen"></div>
                    <div class="seats">
                        <?php
                        // Generate 40 seats (5 rows x 8 seats)
                        for ($i = 1; $i <= 40; $i++) {
                            $row = ceil($i / 8);
                            $seat = $i % 8 ? $i % 8 : 8;
                            echo "<div class='seat' data-seat='$i'>
                                    <input type='checkbox' name='seats[]' value='$i' id='seat$i' style='display: none;'>
                                    <label for='seat$i'>$row-$seat</label>
                                  </div>";
                        }
                        ?>
                    </div>
                    <div class="legend">
                        <div class="legend-item">
                            <div class="legend-box available"></div>
                            <span>Available</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-box selected"></div>
                            <span>Selected</span>
                        </div>
                        <div class="legend-item">
                            <div class="legend-box occupied"></div>
                            <span>Occupied</span>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <label>Number of Tickets</label>
                    <input type="number" name="quantity" class="form-control" min="1" max="10" value="1" required>
                </div>

                <div class="form-group">
                    <label>Total Price</label>
                    <input type="text" class="form-control" id="total-price" readonly value="$<?php echo htmlspecialchars($movie['price']); ?>">
                </div>

                <button type="submit" class="btn-book">Confirm Booking</button>
            </form>
        </div>
    </div>

    <!-- Scripts -->
    <script src="assets/js/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Handle seat selection
            $('.seat').click(function() {
                if (!$(this).hasClass('occupied')) {
                    $(this).toggleClass('selected');
                    $(this).find('input[type="checkbox"]').prop('checked', $(this).hasClass('selected'));
                    updateTotalPrice();
                }
            });

            // Update total price when quantity changes
            $('input[name="quantity"]').change(function() {
                updateTotalPrice();
            });

            function updateTotalPrice() {
                const basePrice = <?php echo $movie['price']; ?>;
                const quantity = $('input[name="quantity"]').val();
                const selectedSeats = $('.seat.selected').length;
                const total = basePrice * quantity * selectedSeats;
                $('#total-price').val('$' + total.toFixed(2));
            }
        });
    </script>
</body>
</html> 