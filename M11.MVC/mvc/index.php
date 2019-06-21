<?php

/**
 * Nạp tất cả các file trong mô hình MVC vào file index.php
 */
include_once "mvc/route.php";

include_once "mvc/controllers/EmployeeController.php";

include_once "mvc/models/Database.php";

include_once "mvc/Models/EmployeeModel.php";

$app = new \MVC\Route();

$app->run();
