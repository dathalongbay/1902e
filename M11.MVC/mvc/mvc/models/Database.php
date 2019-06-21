<?php
namespace MVC\Models;

class Database {

    public $connection;
    public $serverName = "localhost";
    public $username = "root";
    public $password = "";
    public $dbName = "mvc1";


    public function __construct()
    {


        $connection = mysqli_connect($this->serverName, $this->username, $this->password, $this->dbName);

        if($connection->connect_error == true) {
            die("Không thể kết nối đến CSDL");
        }

        $this->connection = $connection;


    }


}