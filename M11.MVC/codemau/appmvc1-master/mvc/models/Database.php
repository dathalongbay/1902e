<?php
namespace MVC\Models;

class Database {

    public $connection;

    const DATABASE_SERVER = "localhost";

    const DATABASE_USER = "root";

    const DATABASE_PASSWORD = "";

    const DATABASE_NAME = "mvc1";


    public function __construct()
    {
        /**
         * !$this->connection
         * Khi chưa có kết nối đến CSDL
         */
        if (!$this->connection) {
            $this->connection = mysqli_connect(self::DATABASE_SERVER, self::DATABASE_USER,
                self::DATABASE_PASSWORD, self::DATABASE_NAME);
        }
    }
}