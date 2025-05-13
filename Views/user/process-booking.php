<?php
session_start();
require_once '../../Control/MovieController.php';
require_once '../../Control/BookingController.php';

// التحقق من تسجيل الدخول
if (!isset($_SESSION['user_id'])) {
    header('Location: login.php');
    exit();
}

// التحقق من البيانات المرسلة
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $movie_id = isset($_POST['movie_id']) ? intval($_POST['movie_id']) : 0;
    $showtime_id = isset($_POST['showtime_id']) ? intval($_POST['showtime_id']) : 0;
    $selected_seats = isset($_POST['selected_seats']) ? $_POST['selected_seats'] : [];
    $total_price = isset($_POST['total_price']) ? floatval($_POST['total_price']) : 0;
    $user_id = $_SESSION['user_id'];

    // التحقق من صحة البيانات
    if ($movie_id <= 0 || $showtime_id <= 0 || empty($selected_seats) || $total_price <= 0) {
        $_SESSION['error'] = "Invalid booking data. Please try again.";
        header('Location: book-tickets.php?id=' . $movie_id);
        exit();
    }

    try {
        // إنشاء الحجز
        $booking_id = createBooking($user_id, $movie_id, $showtime_id, $total_price);
        
        if ($booking_id) {
            // تحديث حالة المقاعد
            foreach ($selected_seats as $seat_id) {
                updateSeatStatus($seat_id, 'reserved');
                addBookingSeat($booking_id, $seat_id);
            }

            // إرسال تأكيد الحجز
            $_SESSION['success'] = "Booking confirmed! Your booking ID is: " . $booking_id;
            header('Location: booking-confirmation.php?id=' . $booking_id);
            exit();
        } else {
            throw new Exception("Failed to create booking");
        }
    } catch (Exception $e) {
        $_SESSION['error'] = "An error occurred: " . $e->getMessage();
        header('Location: book-tickets.php?id=' . $movie_id);
        exit();
    }
} else {
    // إذا تم الوصول للصفحة بدون POST
    header('Location: movies.php');
    exit();
}
?> 