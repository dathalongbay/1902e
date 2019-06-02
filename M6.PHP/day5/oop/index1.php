<?php

/**
 * class ( lớp )
 * object ( đối tượng )
 * instance ( thể hiện của 1 class ) đối tượng cụ thể
 * class Người
 * đối tượng hay instance là tuấn
 */

class Student {

    /**
     * Thuộc tính trong hướng đối tượng
     * là tính chất của class đó
     */

    public $name;

    public $age;

    public $location;

    public $point;

    /**
     * Phương thức đầu tiên của class
     * phương thức khởi tạo __construct()
     * phương thức này nó sẽ chạy ngay khi khởi tạo đối tượng
     * từ class mà không cần gọi trực tiếp
     * Hàm thì nằm ngoài class
     * Còn phương thức method nằm trong class
     * method chính là hàm bên trong class
     */
    public function __construct($name_param , $age_param , $location_param)
    {
        // Gán tham số truyền vào thuộc tính của class

        /**
         * Trong class để gọi đến chính class thì ta dùng từ khóa $this
         * để gọi thuộc tính $this->tên_thuộc_tính nhưng chú ý là tên thuộc tính
         * không có $
         * $this->$name ( viết sai )
         * $this->name ( viết đúng )
         */
        $this->name = $name_param;
        $this->age = $age_param;
        $this->location = $location_param;

        /**
         * __METHOD__ là magic method cho ta biết
         * phương thức nào đang được gọi
         */
        echo "<br> __METHOD__ " . __METHOD__;
    }


    /**
     * Xây dựng phương thức khác
     */
    public function printInfo() {
        echo "<br> __METHOD__ " . __METHOD__;
        echo "<br>Tên của sinh viên : " . $this->name;
        echo "<br>Tuổi của sinh viên : " . $this->age;
        echo "<br>Quê hương của sinh viên : " . $this->location;
    }


} // kết thúc class

/**
 * Khởi tạo đối tượng cụ thể của class
 * Sử dụng từ khóa new tên_class()
 */
$tuan = new Student("tuấn", "21", "bắc ninh");

echo "<br> Gọi đến method printInfo() ";
/**
 * Gọi 1 phương thức
 */
$tuan->printInfo();

/**
 * Gọi 1 số thuộc tính bên trong class
 */
echo "<br> In ra tên của sinh viên bên ngoài class " . $tuan->name;
echo "<br> In ra tuổi của sinh viên bên ngoài class " . $tuan->age;
echo "<br> In ra quê hương của sinh viên bên ngoài class " . $tuan->location;

echo "<br> In ra cấu trúc của class";
/**
 * Xem cấu trúc của 1 class
 * thì sử dụng hàm print_r()
 */
echo "<pre>";
print_r($tuan);
echo "</pre>";





