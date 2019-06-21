<?php
namespace MVC\Models;

class EmployeeModel extends Database {


    public function getAll() {

        $sqlSelect = "SELECT * FROM employees";
        /**
         * mysqli_query(tham số 1, tham số 2) là hàm thực hiện câu query mysql
         * tham số 1 chính là biến kết nối CSDL $connection
         * tham số 2 chính là câu query sql
         */
        $result = mysqli_query($this->connection, $sqlSelect);

        return $result;
    }


    public function getSingle($employee_id = 0) {

        $sqlSelect = "SELECT * FROM employees WHERE id = " . $employee_id;

        $result = mysqli_query($this->connection, $sqlSelect);

        $row = mysqli_fetch_assoc($result);

        return $row;
    }


    public function store($data) {

        $name = $data["name"];
        $address = $data["address"];
        $salary = (int)$data["salary"];

        if (empty($name) || empty($address)) {
            return false;
        }

        $sqlInsert = "INSERT INTO employees (name, address, salary) VALUES ('$name', '$address', $salary)";

        if (mysqli_query($this->connection, $sqlInsert)) {
            return true;
        }

        return false;
    }

    public function update($data) {

        $name = $data['name'];
        $address = $data['address'];
        $salary = (int)$data['salary'];
        $id = (int)$data['id'];

        if (empty($name) || empty($address)) {
            return false;
        }

        $sql = "UPDATE employees SET name='$name',address='$address',salary=$salary WHERE id = " . (int) $id;

        echo $sql;
        if (mysqli_query($this->connection, $sql)) {
            echo "Update thanh cong";
            /**
             * hàm header được dùng để chuyển hương url
             */
            header('Location: index.php');
            exit;
        } else {
            return false;
        }
    }


    public function delete($id) {

        $sqlDelete = "DELETE FROM employees WHERE id = $id";
        if (mysqli_query($this->connection, $sqlDelete)) {
            return true;
        }

        return false;

    }
}