<?php
include 'db.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $reservation_date = $_POST['reservation_date'];
    $credit_card = $_POST['credit_card'];

    $sql = "INSERT INTO reservations (name, surname, email, reservation_date, credit_card) 
            VALUES ('$name', '$surname', '$email', '$reservation_date', '$credit_card')";

    if ($conn->query($sql) === TRUE) {
        echo "Reservation successful!";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>


