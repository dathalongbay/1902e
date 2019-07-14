<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    //

    /**
     * Liệt kê các sản phẩm
     */
    public function index() {

        return view("simpleadmin.product.index");
    }

    /**
     * tạo view tạo mới sản phẩm
     */
    public function create() {
        return view("simpleadmin.product.create");
    }

    /**
     * trả về view sửa sản phẩm
     */
    public function edit() {
        return view("simpleadmin.product.edit");
    }

    /**
     * trả về view xóa sản phẩm
     */
    public function delete() {
        return view("simpleadmin.product.delete");
    }
}
