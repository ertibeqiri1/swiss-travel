<?php
require_once "Reservation.php";
$reservation = new Reservation();

if (isset($_GET['id'])) {
    $data = $reservation->getById($_GET['id']);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $success = $reservation->update($_POST['id'], $_POST['name'], $_POST['surname'], $_POST['email'], $_POST['reservation_date'], $_POST['credit_card']);
    if ($success) {
        header("Location: dashboard.php");
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Edit Reservation</title>
</head>
<body>

    <h1>Edit Reservation</h1>
    <form action="edit.php" method="post">
        <input type="hidden" name="id" value="<?= $data['id'] ?>">
        <input type="text" name="name" value="<?= $data['name'] ?>" required>
        <input type="text" name="surname" value="<?= $data['surname'] ?>" required>
        <input type="email" name="email" value="<?= $data['email'] ?>" required>
        <input type="date" name="reservation_date" value="<?= $data['reservation_date'] ?>" required>
        <input type="text" name="credit_card" value="<?= $data['credit_card'] ?>" required>
        <button type="submit">Update</button>
    </form>

</body>
</html>

