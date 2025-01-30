<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM reservations WHERE id=$id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];
    $reservation_date = $_POST['reservation_date'];
    $credit_card = $_POST['credit_card'];

    $sql = "UPDATE reservations SET name='$name', surname='$surname', email='$email', reservation_date='$reservation_date', credit_card='$credit_card' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Reservation updated!'); window.location.href='dashboard.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

<!DOCTYPE html>
<html>
<head><title>Edit Reservation</title></head>
<body>
    <form method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        <input type="text" name="name" value="<?php echo $row['name']; ?>" required>
        <input type="text" name="surname" value="<?php echo $row['surname']; ?>" required>
        <input type="email" name="email" value="<?php echo $row['email']; ?>" required>
        <input type="date" name="reservation_date" value="<?php echo $row['reservation_date']; ?>" required>
        <input type="text" name="credit_card" value="<?php echo $row['credit_card']; ?>" required>
        <button type="submit">Update</button>
    </form>
</body>
</html>
