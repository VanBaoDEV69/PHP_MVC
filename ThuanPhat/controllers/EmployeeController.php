<?php
require_once '../models/EmployeeModel.php';

class EmployeeController {
    private $model;

    public function __construct($db) {
        $this->model = new EmployeeModel($db);
    }

    public function index() {
        $employees = $this->model->getAllEmployees();
        include '../views/employee_list.php';
    }

    public function show($id) {
        $employee = $this->model->getEmployeeById($id);
        include '../views/employee_detail.php';
    }

    public function create() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $this->model->createEmployee($name, $email, $phone);
            header('Location: index.php');
        } else {
            include '../views/employee_create.php';
        }
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_POST['name'];
            $email = $_POST['email'];
            $phone = $_POST['phone'];
            $this->model->updateEmployee($id, $name, $email, $phone);
            header('Location: index.php');
        } else {
            $employee = $this->model->getEmployeeById($id);
            include '../views/employee_create.php';
        }
    }

    public function delete($id) {
        $this->model->deleteEmployee($id);
        header('Location: index.php');
    }
}
?>