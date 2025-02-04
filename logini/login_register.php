<?php
session_start();
require_once 'config.php';

class User {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Validimi me regex
    private function validateInput($data, $pattern) {
        return preg_match($pattern, $data);
    }

    // Regjistrimi user
    public function register($name, $email, $password, $role) {
        // Regex kodi
        $namePattern = "/^[A-Za-z\s]{3,30}$/"; // 3-30 karaktere
        $emailPattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/"; // email valid
        $passwordPattern = "/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{6,}$/"; // Minimumi 6 karaktere

        // Validimi emrit
        if (!$this->validateInput($name, $namePattern)) {
            return "Name must be between 3-30 characters and contain only letters.";
        }

        // Validimi email
        if (!$this->validateInput($email, $emailPattern)) {
            return "Invalid email format.";
        }

        // Validimi password
        if (!$this->validateInput($password, $passwordPattern)) {
            return "Password must be at least 6 characters long and include a number.";
        }

        
        $stmt = $this->db->prepare("SELECT email FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $stmt->store_result();

        if ($stmt->num_rows > 0) {
            return "Email is already registered!";
        }

        
        $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
        $stmt = $this->db->prepare("INSERT INTO users (name, email, password, role) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $name, $email, $hashedPassword, $role);
        
        return $stmt->execute();
    }

    // Login useri
    public function login($email, $password) {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }
}

$user = new User();

// Regjistrimi user
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $result = $user->register($name, $email, $password, $role);
    if ($result === true) {
        header("Location: login.php?register_success=true");
        exit();
    } else {
        $_SESSION['register_error'] = $result;
        $_SESSION['active_form'] = 'register';
        header("Location: login.php");
        exit();
    }
}

// 
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loggedInUser = $user->login($email, $password);
    if ($loggedInUser) {
        $_SESSION['name'] = $loggedInUser['name'];
        $_SESSION['email'] = $loggedInUser['email'];
        $_SESSION['role'] = $loggedInUser['role'];

        if ($loggedInUser['role'] === 'admin') {
            header("Location: admin_page.php");
        } else {
            header("Location: ../index.html");
        }
        exit();
    }
    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: login.php");
    exit();
}
