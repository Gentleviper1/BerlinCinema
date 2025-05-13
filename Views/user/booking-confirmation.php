<?php
session_start();
require_once '../../Control/BookingController.php';

// التحقق من وجود معرف الحجز
if (!isset($_GET['id'])) {
    header('Location: movies.php');
    exit();
}

$booking_id = intval($_GET['id']);
$booking = getBookingDetails($booking_id);

if (!$booking) {
    $_SESSION['error'] = "Booking not found.";
    header('Location: movies.php');
    exit();
}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Confirmation - Berlin Cinema</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="assets/img/favcion.png" />
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css" media="all" />
    <!-- Main style CSS -->
    <link rel="stylesheet" type="text/css" href="assets/css/style.css" media="all" />
    <style>
        .confirmation-container {
            max-width: 800px;
            margin: 50px auto;
            padding: 30px;
            background: rgba(26, 26, 26, 0.95);
            border-radius: 10px;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.3);
        }

        .confirmation-header {
            text-align: center;
            margin-bottom: 30px;
            color: #9B6B9E;
        }

        .confirmation-details {
            background: rgba(45, 45, 45, 0.5);
            padding: 20px;
            border-radius: 8px;
            margin-bottom: 20px;
        }

        .detail-item {
            display: flex;
            justify-content: space-between;
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(155, 107, 158, 0.2);
        }

        .detail-item:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }

        .detail-label {
            color: #9B6B9E;
            font-weight: bold;
        }

        .detail-value {
            color: #fff;
        }

        .booking-id {
            font-size: 24px;
            color: #9B6B9E;
            text-align: center;
            margin-bottom: 20px;
        }

        .action-buttons {
            text-align: center;
            margin-top: 30px;
        }

        .btn-custom {
            background: linear-gradient(45deg, #6B4E71, #9B6B9E);
            color: #fff;
            border: none;
            padding: 10px 25px;
            border-radius: 5px;
            margin: 0 10px;
            transition: all 0.3s ease;
        }

        .btn-custom:hover {
            background: linear-gradient(45deg, #9B6B9E, #6B4E71);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(155, 107, 158, 0.3);
        }
    </style>
</head>
<body>
    <!-- header section start -->
    <?php include 'includes/header.php'; ?>
    <!-- header section end -->

    <div class="confirmation-container">
        <div class="confirmation-header">
            <h1>Booking Confirmed!</h1>
            <div class="booking-id">Booking ID: #<?php echo $booking_id; ?></div>
        </div>

        <div class="confirmation-details">
            <div class="detail-item">
                <span class="detail-label">Movie:</span>
                <span class="detail-value"><?php echo htmlspecialchars($booking['movie_title']); ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Showtime:</span>
                <span class="detail-value"><?php echo date('F j, Y g:i A', strtotime($booking['showtime'])); ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Seats:</span>
                <span class="detail-value"><?php echo htmlspecialchars($booking['seat_numbers']); ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Total Amount:</span>
                <span class="detail-value">$<?php echo number_format($booking['total_price'], 2); ?></span>
            </div>
            <div class="detail-item">
                <span class="detail-label">Booking Date:</span>
                <span class="detail-value"><?php echo date('F j, Y g:i A', strtotime($booking['booking_date'])); ?></span>
            </div>
        </div>

        <div class="action-buttons">
            <a href="movies.php" class="btn btn-custom">Book Another Movie</a>
            <a href="profile.php" class="btn btn-custom">View My Bookings</a>
        </div>
    </div>

    <!-- footer section start -->
    <?php include 'includes/footer.php'; ?>
    <!-- footer section end -->

    <!-- jquery main JS -->
    <script src="assets/js/jquery.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- main JS -->
    <script src="assets/js/main.js"></script>
</body>
</html> 