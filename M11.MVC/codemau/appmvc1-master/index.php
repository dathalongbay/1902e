<?php
/**
 * Nạp các file cần thiết vào luồng chạy của MVC
 */
include_once "mvc/route.php";
include_once "mvc/models/Database.php";
include_once "mvc/controllers/EmployeeController.php";
include_once "mvc/controllers/ErrorController.php";
include_once "mvc/models/EmployeeModel.php";

/**
 * Cần phải hiểu là trong ứng dụng MVC đến Framework
 * mọi request http sẽ đi qua index.php
 * => đi đến file điều hướng route.php
 * => file điều hướng sẽ gọi controller tương ứng với request
 * => controller gọi đến method có action tương ứng
 *
 * Route : chịu trách nhiệm dẫn hướng cho request vào Controller
 * Controller chịu trách nhiệm điều hướng . gọi model . trả vê view . redirect URL
 * Model : chịu trách nhiệm xử lý tính toán , tương tác trực tiếp với CSDL
 * View : chỉ chịu trách nhiệm hiển thị dữ liệu và giao diện
 * Mọi request đều chạy qua index.php
 * chứ ko trực tiếp chạy vào file controller
 *
 * View có khái niệm layout và view
 * Layout là bố cục hiển thị gồm header , footer , sidebar
 * View là khai niệm để nói về nội dung chính trong trang
 * Các trang đa số chỉ thay đổi nội dung chính giữa trang mà không thay đổi header hay footer
 */
$route = new \MVC\Route();

$route->run();

