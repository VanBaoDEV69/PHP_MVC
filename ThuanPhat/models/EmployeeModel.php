<?php
class EmployeeModel {
    private $db;

    public function __construct($db) {
        $this->db = $db;
    }

    public function getAllEmployees() {
        $stmt = $this->db->prepare("SELECT * FROM employees");
        $stmt->execute();
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getEmployeeById($id) {
        $stmt = $this->db->prepare("SELECT * FROM employees WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function createEmployee($name, $email, $phone) {
        $stmt = $this->db->prepare("INSERT INTO employees (name, email, phone) VALUES (:name, :email, :phone)");
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function updateEmployee($id, $name, $email, $phone) {
        $stmt = $this->db->prepare("UPDATE employees SET name = :name, email = :email, phone = :phone WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->bindParam(':name', $name);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':phone', $phone);
        $stmt->execute();
    }

    public function deleteEmployee($id) {
        $stmt = $this->db->prepare("DELETE FROM employees WHERE id = :id");
        $stmt->bindParam(':id', $id);
        $stmt->execute();
    }
}
?>
