<?php
/**
 * Created by PhpStorm.
 * Yêu cầu : Xây dựng class tên là Database
 * có 1 thuộc tính là connection để lưu trữ kết nội đến CSDL
 * và có 4 thuộc tính : ip database ( localhost ) , user db , pass db , tên CSDL
 * Class này có 1 method khởi tạo là __construct() làm nhiệm vụ kết nội đến CSDL
 * constructor này sẽ có 4 tham số dùng để kết nối đến CSDL truyền vào
 * và trong method này sẽ khởi tạo kết nối CSDL và gán kết nối cho thuộc tính connection
 *
 */

class Database {

    public $connection;

    private $ipDatabase;

    private $userDatabase;

    private $passDatabase;

    protected $databaseName;


    public function __construct($ipDatabase, $userDatabase, $passDatabase, $databaseName)
    {
        /**
         * Những thuộc tính hoặc method private thì chỉ có thể
         * truy cập được trong chính class đó
         */
        $this->ipDatabase = $ipDatabase;
        $this->userDatabase = $userDatabase;
        $this->passDatabase = $passDatabase;

        $this->databaseName = $databaseName;


        $this->connection = new mysqli($ipDatabase, $userDatabase, $passDatabase, $databaseName);
    }




    public function disconnect() {
        mysqli_close($this->connection);
    }


}