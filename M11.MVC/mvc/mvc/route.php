<?php
namespace MVC;

use MVC\Controllers\EmployeeController;

class Route {


    public function run() {


        /**
         * url : index.php?controller=employee&action=index
         * $controller = new EmployeeController();
         * $controller->index();
         *
         * url : index.php?controller=employee&action=edit
         * $controller = new EmployeeController();
         * $controller->edit();
         *
         * url : index.php?controller=employee&action=delete
         * $controller = new EmployeeController();
         * $controller->delete();
         *
         * url : index.php?controller=employee&action=create
         * $controller = new EmployeeController();
         * $controller->create();
         * $_REQUEST = $_POST + $_GET
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=index
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=create
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=edit
         *
         * http://localhost/appmvc1/index.php?controller=employee&action=delete
         */


        /**
         * $_REQUEST lấy tất cả các dữ liệu điều hướng
         * từ method post và get
         */

        echo "<br> $ REQUEST";
        echo "<pre>";
        print_r($_REQUEST);
        echo "</pre>";

        if (isset($_REQUEST["controller"]) && ($_REQUEST["controller"] == "employee")) {

            $controller = new EmployeeController();

            if (isset($_REQUEST["action"]) && ($_REQUEST["action"] == "index")) {
                $controller->index();
            } elseif (isset($_REQUEST["action"]) && ($_REQUEST["action"] == "create")) {
                $controller->create();
            } elseif (isset($_REQUEST["action"]) && ($_REQUEST["action"] == "edit")) {
                $controller->edit();
            } elseif (isset($_REQUEST["action"]) && ($_REQUEST["action"] == "delete")) {
                $controller->delete();
            } else {
                echo "Không tồn tại phương thức này";
                exit;
            }

        } else {
            echo "Không tồn tại trang này";
            exit;
        }

    }

}