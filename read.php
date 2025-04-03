<?php
include 'db.php';

$sql = "SELECT * FROM reservations";
$result = $conn->query($sql);

$reservations = [];
if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        $reservations[] = $row;
    }
}
//json_encode() shndërron të dhënat PHP në format JSON(JavaScript Object Notation)
echo json_encode($reservations);
?>
