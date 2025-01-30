<?php
include 'db.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM reservations WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Deleted successfully!'); window.location.href='dashboard.php';</script>";
    } else {
        echo "Error: " . $conn->error;
    }
}
?>

