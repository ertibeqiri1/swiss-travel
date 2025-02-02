<?php
session_start();
require_once 'config.php';

class User {
    private $db;

    public function __construct() {
        $database = new Database();
        $this->db = $database->getConnection();
    }

    // Regjistrimi i userit
    public function register($name, $email, $password, $role) {
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

    // Logini i userit
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

//Regjistrimi
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['register'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $role = $_POST['role'];

    $result = $user->register($name, $email, $password, $role);
    if ($result === true) {
        header("Location: login.php");
        exit();
    } else {
        $_SESSION['register_error'] = $result;
        $_SESSION['active_form'] = 'register';
        header("Location: login.php");
        exit();
    }
}

//  Logini
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loggedInUser = $user->login($email, $password);
    if ($loggedInUser) {
        $_SESSION['name'] = $loggedInUser['name'];
        $_SESSION['email'] = $loggedInUser['email'];

        if ($loggedInUser['role'] === 'admin') {
            header("Location: admin_page.php");
        } else {
            header("Location:../index.html");
        }
        exit();
    }

    $_SESSION['login_error'] = 'Incorrect email or password';
    $_SESSION['active_form'] = 'login';
    header("Location: login.php");
    exit();
}
?>
