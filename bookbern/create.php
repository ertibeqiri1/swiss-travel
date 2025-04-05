<?php
require_once "Reservation.php";
session_start();

if (!isset($_SESSION['email']) || !isset($_SESSION['role'])) {
    echo "<script>
            alert('❌ You must be logged in to make a reservation.');
            window.location.href = 'logini/login.php';
          </script>";
    exit();
}

// Optional: restrict to only 'admin' and 'user'
if ($_SESSION['role'] !== 'admin' && $_SESSION['role'] !== 'user') {
    echo "<script>
            alert('❌ Unauthorized access!');
            window.location.href = 'BookBern.php';
          </script>";
    exit();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservation = new Reservation();
    $success = $reservation->create(
        $_POST['name'],
        $_POST['surname'],
        $_POST['email'],
        $_POST['reservation_date'],
        $_POST['credit_card']
    );

    if ($success) {
        echo "<script>
                alert('🎉 Reservation Successful!');
                window.location.href = 'BookBern.php';
              </script>";
    } else {
        echo "<script>
                alert('❌ Reservation Failed!');
                window.location.href = 'BookBern.php';
              </script>";
    }
}
?>






