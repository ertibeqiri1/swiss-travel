<?php
include 'db.php'; // Database connection
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="styles.css"> <!-- Include your CSS file -->
</head>
<body>

    <h2>Ticket Reservations</h2>
    <table border="1">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Surname</th>
            <th>Email</th>
            <th>Reservation Date</th>
            <th>Credit Card</th>
            <th>Actions</th>
        </tr>

        <?php
        $sql = "SELECT * FROM reservations";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
                    <td>".$row['id']."</td>
                    <td>".$row['name']."</td>
                    <td>".$row['surname']."</td>
                    <td>".$row['email']."</td>
                    <td>".$row['reservation_date']."</td>
                    <td>".$row['credit_card']."</td>
                    <td>
                        <a href='edit.php?id=".$row['id']."'>✏️ Edit</a> |
                        <a href='delete.php?id=".$row['id']."' onclick='return confirm(\"Are you sure you want to delete this reservation?\")'>🗑️ Delete</a>
                    </td>
                </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No reservations found</td></tr>";
        }
        ?>
    </table>

    <br>
    <a href="index.php">➕ Make a New Reservation</a>

</body>
</html>
