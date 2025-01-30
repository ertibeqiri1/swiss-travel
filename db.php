<?php
class Database {
    private static $instance = null;
    private $conn;

    private $host = "localhost";
    private $username = "root"; // Change if needed
    private $password = ""; // Change if needed
    private $dbname = "bern_reservation";

    private function __construct() {
        $this->conn = new mysqli($this->host, $this->username, $this->password, $this->dbname);
        if ($this->conn->connect_error) {
            die("Database connection failed: " . $this->conn->connect_error);
        }
    }

    public static function getInstance() {
        if (!self::$instance) {
            self::$instance = new Database();
        }
        return self::$instance;
    }

    public function getConnection() {
        return $this->conn;
    }
}
?>
