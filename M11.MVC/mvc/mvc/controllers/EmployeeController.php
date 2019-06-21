<?php
namespace MVC\Controllers;

class EmployeeController {


    /**
     * Dùng để điều hướng cho phần hiển thị tất cả các nhận viên
     */
    public function index() {

        // trả về view cho phần hiển thị
        include_once "mvc/views/index.php";
    }


    public function create() {


        // trả về view cho phần hiển thị
        include_once "mvc/views/create.php";
    }

    public function edit() {


        // trả về view cho phần hiển thị
        include_once "mvc/views/edit.php";
    }


    public function delete() {


        // trả về view cho phần hiển thị
        include_once "mvc/views/delete.php";
    }


}