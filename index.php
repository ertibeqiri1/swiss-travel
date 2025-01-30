<?php include 'db.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Book a Ticket</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>

    <div class="container">
        <h1>Make a Reservation</h1>
        <form id="reservationForm">
            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="surname" placeholder="Surname" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="date" name="reservation_date" required>
            <input type="text" name="credit_card" placeholder="Credit Card" maxlength="19" required>
            <button type="submit">Book Now</button>
        </form>
    </div>

    <script src="script1.js"></script>

</body>
</html>

