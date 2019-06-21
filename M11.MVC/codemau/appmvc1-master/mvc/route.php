<?php
/**
 * Created by PhpStorm.
 * User: T3H
 * Date: 6/11/2019
 * Time: 6:29 PM
 */
namespace MVC;

// nạp namespace
use MVC\Controllers\EmployeeController;
use MVC\Controllers\ProductController;
use MVC\Controllers\ErrorController;

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



        /*
         * Cách thủ công
         * if ($_REQUEST["controller"] == 'employee') {
            $controller = new EmployeeController();

            if ($_REQUEST["action"] == 'index') {
                $controller->index();
            }

            if ($_REQUEST["action"] == 'edit') {
                    $controller->edit();
            }
        }*/



        $controller = isset($_REQUEST["controller"]) ? trim($_REQUEST["controller"]) : "employee";
        $controller = ucfirst($controller); // Employee
        $controllerName = "MVC\\Controllers\\".$controller."Controller"; // MVC\Controllers\EmployeeController


        echo '<br>$controller : ' . $controller;
        echo '<br>$controllerName : ' . $controllerName;

        if (class_exists($controllerName)) {
            $controllerObject = new $controllerName();

            $action = isset($_REQUEST["action"]) ? trim($_REQUEST["action"]) : 'index';
            echo '<br>$action : ' . $action;

            if (method_exists($controllerObject, $action)) {
                /**
                 * $controllerObject->index()
                 * $controllerObject->edit()
                 * $controllerObject->delete()
                 */
                return $controllerObject->$action();
            } else {
                $controllerObject = new ErrorController();

                return $controllerObject->redirect404();
            }
        } else {
            $controllerObject = new ErrorController();

            return $controllerObject->redirect404();
        }



    }

}