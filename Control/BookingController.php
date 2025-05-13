<?php
require_once __DIR__ . '/Database.php';

/**
 * إنشاء حجز جديد
 */
function createBooking($user_id, $movie_id, $showtime_id, $total_price) {
    global $conn;
    
    try {
        $conn->beginTransaction();

        // إنشاء الحجز
        $stmt = $conn->prepare("
            INSERT INTO bookings (user_id, movie_id, showtime_id, total_price, booking_date, status)
            VALUES (?, ?, ?, ?, NOW(), 'confirmed')
        ");
        
        $stmt->execute([$user_id, $movie_id, $showtime_id, $total_price]);
        $booking_id = $conn->lastInsertId();

        $conn->commit();
        return $booking_id;
    } catch (PDOException $e) {
        $conn->rollBack();
        throw new Exception("Database error: " . $e->getMessage());
    }
}

/**
 * تحديث حالة المقعد
 */
function updateSeatStatus($seat_id, $status) {
    global $conn;
    
    try {
        $stmt = $conn->prepare("
            UPDATE seats 
            SET status = ? 
            WHERE seat_id = ?
        ");
        
        return $stmt->execute([$status, $seat_id]);
    } catch (PDOException $e) {
        throw new Exception("Database error: " . $e->getMessage());
    }
}

/**
 * إضافة مقعد للحجز
 */
function addBookingSeat($booking_id, $seat_id) {
    global $conn;
    
    try {
        $stmt = $conn->prepare("
            INSERT INTO booking_seats (booking_id, seat_id)
            VALUES (?, ?)
        ");
        
        return $stmt->execute([$booking_id, $seat_id]);
    } catch (PDOException $e) {
        throw new Exception("Database error: " . $e->getMessage());
    }
}

/**
 * الحصول على تفاصيل الحجز
 */
function getBookingDetails($booking_id) {
    global $conn;
    
    try {
        $stmt = $conn->prepare("
            SELECT b.*, m.title as movie_title, s.showtime, s.hall_id,
                   GROUP_CONCAT(st.seat_number) as seat_numbers
            FROM bookings b
            JOIN movies m ON b.movie_id = m.movie_id
            JOIN showtimes s ON b.showtime_id = s.showtime_id
            LEFT JOIN booking_seats bs ON b.booking_id = bs.booking_id
            LEFT JOIN seats st ON bs.seat_id = st.seat_id
            WHERE b.booking_id = ?
            GROUP BY b.booking_id
        ");
        
        $stmt->execute([$booking_id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        throw new Exception("Database error: " . $e->getMessage());
    }
}

/**
 * التحقق من توفر المقاعد
 */
function checkSeatsAvailability($seat_ids) {
    global $conn;
    
    try {
        $placeholders = str_repeat('?,', count($seat_ids) - 1) . '?';
        $stmt = $conn->prepare("
            SELECT COUNT(*) as count
            FROM seats
            WHERE seat_id IN ($placeholders)
            AND status = 'available'
        ");
        
        $stmt->execute($seat_ids);
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        
        return $result['count'] === count($seat_ids);
    } catch (PDOException $e) {
        throw new Exception("Database error: " . $e->getMessage());
    }
}

/**
 * الحصول على حجوزات المستخدم
 */
function getUserBookings($user_id) {
    global $conn;
    
    try {
        $stmt = $conn->prepare("
            SELECT b.*, m.title as movie_title, s.showtime,
                   GROUP_CONCAT(st.seat_number) as seat_numbers
            FROM bookings b
            JOIN movies m ON b.movie_id = m.movie_id
            JOIN showtimes s ON b.showtime_id = s.showtime_id
            LEFT JOIN booking_seats bs ON b.booking_id = bs.booking_id
            LEFT JOIN seats st ON bs.seat_id = st.seat_id
            WHERE b.user_id = ?
            GROUP BY b.booking_id
            ORDER BY b.booking_date DESC
        ");
        
        $stmt->execute([$user_id]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    } catch (PDOException $e) {
        throw new Exception("Database error: " . $e->getMessage());
    }
}
?> 