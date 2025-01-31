<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $reservation_date = $_POST['reservation_date'];
    $credit_card = $_POST['credit_card'];

    $sql = "UPDATE reservations SET name='$name', surname='$surname', email='$email', reservation_date='$reservation_date', credit_card='$credit_card' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation updated successfully!";
    } else {
        echo "Error updating record: " . $conn->error;
    }
}
?>
