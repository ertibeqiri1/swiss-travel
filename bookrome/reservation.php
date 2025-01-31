<?php
require_once "db.php";

class Reservation {
    private $conn;

    public function __construct() {
        $this->conn = Database::getInstance()->getConnection();
    }

    public function create($name, $surname, $email, $date, $creditCard) {
        $stmt = $this->conn->prepare("INSERT INTO reservations (name, surname, email, reservation_date, credit_card) VALUES (?, ?, ?, ?, ?)");
        $stmt->bind_param("sssss", $name, $surname, $email, $date, $creditCard);
        return $stmt->execute();
    }

    public function getAll() {
        $sql = "SELECT * FROM reservations";
        return $this->conn->query($sql);
    }

    public function getById($id) {
        $stmt = $this->conn->prepare("SELECT * FROM reservations WHERE id = ?");
        $stmt->bind_param("i", $id);
        $stmt->execute();
        return $stmt->get_result()->fetch_assoc();
    }

    public function update($id, $name, $surname, $email, $date, $creditCard) {
        $stmt = $this->conn->prepare("UPDATE reservations SET name=?, surname=?, email=?, reservation_date=?, credit_card=? WHERE id=?");
        $stmt->bind_param("sssssi", $name, $surname, $email, $date, $creditCard, $id);
        return $stmt->execute();
    }

    public function delete($id) {
        $stmt = $this->conn->prepare("DELETE FROM reservations WHERE id = ?");
        $stmt->bind_param("i", $id);
        return $stmt->execute();
    }
}
?>
