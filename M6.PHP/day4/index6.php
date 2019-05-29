<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

    <h1>Hàm trong PHP</h1>
    <pre>
        Hàm là 1 tập hợp các dòng code để thực hiện 1 chức năng
        ví dụ như hàm tính chu vi hình tròn , hàm tính diện tích hình chữ nhật
        hàm xuất file PDF ...
        - Thay vì phải viết lại nhiều dòng code khi thực hiện 1 chức năng
        nhiều lần người ta sử dụng hàm . Để khi cần dùng chỉ cần gọi tên hàm và sử dụng
        Hàm khai báo bằng từ khóa function
        function tên_hàm(tham_số_1, tham_số_2 ...) {
            // code chạy trong hàm

            // return có thể có hoặc không
            // và sẽ kết thúc hàm tại câu lệnh return
            return giá_trị;
        }
    </pre>

    <?php
    /*
     * Khai báo hàm với $r là tham số cần truyền vào
     */
    function tinhchuvihinhtron($r) {
        $chuvi = 3.14*$r*2;

        return $chuvi;
    }

    // gọi hàm
    $ketqua = tinhchuvihinhtron(5);
    echo "<br> Chu vi hinh tron là : " . $ketqua;

    ?>

</body>
</html>