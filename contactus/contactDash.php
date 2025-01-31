<?php
class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "contact_form_db";
    public $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function getMessages() {
        $sql = "SELECT id, name, email, message, submitted_at FROM messages ORDER BY submitted_at DESC";
        return $this->conn->query($sql);
    }

    public function deleteMessage($id) {
        $stmt = $this->conn->prepare("DELETE FROM messages WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}

$db = new Database();

if (isset($_GET['delete'])) {
    if ($db->deleteMessage(intval($_GET['delete']))) {
        header("Location: contactDash.php");
        exit();
    }
}

$messages = $db->getMessages();
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <style>
        table { width: 100%; border-collapse: collapse; }
        th, td { padding: 10px; border: 1px solid #ddd; text-align: left; }
        th { background-color: #f4f4f4; }
        .delete-btn { color: red; text-decoration: none; }
    </style>
</head>
<body>
    <h2>Contact Messages</h2>
    <table>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            <th>Submitted At</th>
            <th>Action</th>
        </tr>
        <?php if ($messages->num_rows > 0): ?>
            <?php while($row = $messages->fetch_assoc()): ?>
                <tr>
                    <td><?php echo $row["id"]; ?></td>
                    <td><?php echo $row["name"]; ?></td>
                    <td><?php echo $row["email"]; ?></td>
                    <td><?php echo $row["message"]; ?></td>
                    <td><?php echo $row["submitted_at"]; ?></td>
                    <td><a class="delete-btn" href="?delete=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure?');">Delete</a></td>
                </tr>
            <?php endwhile; ?>
        <?php else: ?>
            <tr><td colspan="6">No messages found</td></tr>
        <?php endif; ?>
    </table>
</body>
</html>

<?php
$db->conn->close();
?>
