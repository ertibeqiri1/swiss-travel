<?php
require_once "Reservation.php";

if (isset($_GET['id'])) {
    $reservation = new Reservation();
    $success = $reservation->delete($_GET['id']);
    header("Location: dashboard.php");
}
?>


