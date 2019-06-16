<?php

include_once "database.php";
include_once "productModel.php";

$db = new Database("localhost", "root", "", "oop");

$productModel = new productModel();
