<?php
require_once "Reservation.php";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $reservation = new Reservation();
    $success = $reservation->create($_POST['name'], $_POST['surname'], $_POST['email'], $_POST['reservation_date'], $_POST['credit_card']);

    if ($success) {
        echo "<script>
                alert('🎉 Reservation Successful! Your ticket has been booked.');
                window.location.href = 'BookParis.php';
              </script>";
    } else {
        echo "<script>
                alert('❌ Reservation Failed! Please try again.');
                window.location.href = 'BookParis.php';
              </script>";
    }
}
?>





