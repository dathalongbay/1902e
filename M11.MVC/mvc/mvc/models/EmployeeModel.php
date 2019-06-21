<?php
namespace MVC\Models;

class EmployeeModel extends Database {



    // khai báo tên bảng
    public $table = "employees";


    /**
     * Lấy ra tất cả các bản ghi
     */
    public function getAll() {

        $sqlSelect = "SELECT * FROM $this->table";

        /**
         * Thực hiện câu truy vấn và trả data cho biến $result
         */
        $result = $this->connection->query($sqlSelect);

        return $result;
    }


    /**
     * Lấy ra 1 bản ghi hay 1 nhân viên
     * @param $id
     */
    public function getRow($id) {

        $sqlSelect = "SELECT * FROM $this->table WHERE id=".(int)$id;

        $result = $this->connection->query($sqlSelect);

        $row = $result->fetch_assoc();

        return $row;
    }


    /**
     * Insert 1 bản ghi vào CSDL
     * @param $data
     */
    public function insert($data) {

        if (isset($data['name']) && isset($data['address']) && isset($data['salary'])) {

            $name = $data['name'];
            $address = $data['address'];
            $salary = $data['salary'];

            $sqlInsert = "INSERT INTO $this->table (name, address, salary) VALUES ('$name', '$address', $salary)";

            // Thực hiện câu SQL
            $result = $this->connection->query($sqlInsert);

            return $result;
        } else {
            return false;
        }

        return false;

    }


    /**
     * Cập nhật bản ghi
     * @param $data
     */
    public function update($data) {

        if (isset($data["employee_id"]) && isset($data["name"]) &&
                isset($data["address"]) && isset($data["salary"])) {
            $id = (int) $data["employee_id"];
            $name = $data['name'];
            $address = $data['address'];
            $salary = $data['salary'];

            $sqlUpdate = "UPDATE $this->table SET name='$name',address='$address',salary=$salary WHERE id=$id";
            // Thực hiện câu SQL

            $result = $this->connection->query($sqlUpdate);

            return $result;
        }

        return false;
    }


    /**
     * Xóa bản ghi trong CSDL
     * @param $id
     */
    public function delete($id) {

        $sql = "DELETE  FROM $this->table WHERE id=".(int)$id;

        $result = $this->connection->query($sql);

        return $result;
    }




}