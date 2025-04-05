<?php
session_start(); // Start session to check login status and role

// Allow only logged-in users with role 'user' or 'admin'
if (!isset($_SESSION['email']) || !in_array($_SESSION['role'], ['user', 'admin'])) {
    echo "<script>
        alert('⚠️ You must be logged in as a user or admin to send a message.');
        window.location.href = 'logini/login.php';
    </script>";
    exit();
}

class Database {
    private $host = "localhost";
    private $username = "root";
    private $password = "";
    private $dbname = "contact_form_db";
    private $conn;

    public function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Connection failed: " . $this->conn->connect_error);
        }
    }

    public function insertMessage($name, $email, $message) {
        $stmt = $this->conn->prepare("INSERT INTO messages (name, email, message) VALUES (?, ?, ?)");
        $stmt->bind_param("sss", $name, $email, $message);
        
        if ($stmt->execute()) {
            echo "<script>
                alert('✅ Message sent successfully!');
                window.location.href='contactUs.php';
            </script>";
        } else {
            echo "<script>
                alert('❌ Error: " . $stmt->error . "');
                window.history.back();
            </script>";
        }
        
        $stmt->close();
    }

    public function closeConnection() {
        $this->conn->close();
    }
}

// Only handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $db = new Database();
    $db->insertMessage($_POST['name'], $_POST['email'], $_POST['message']);
    $db->closeConnection();
}
?>
