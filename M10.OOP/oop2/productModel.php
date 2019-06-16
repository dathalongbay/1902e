<?php

class productModel extends Database {

    public $table = "product";




    /**
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function index() {

        // $this->>connection
    }


    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * không cần cái key id array('product_name' => 'son môi')
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function create($data) {

        // $this->>connection
    }


    /**
     * $data chính là mảng chứa dữ liệu để tạo 1 bản ghi mới
     * $data cần đủ các cột trong CSDL của bảng products
     * Lấy ra tất các bản ghi từ bảng products
     */
    public function edit($data) {

        // $this->>connection
    }


    /**
     * Xóa
     * @param $prodcut_id
     */
    public function delete($prodcut_id) {

    }
}