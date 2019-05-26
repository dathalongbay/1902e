<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Ví dụ là kiểu dữ liệu dạng số , chuỗi , float , boolean ... thì
        chỉ chứa giá trị đơn 3, "abc", true , false , null
        Nếu muốn lưu trữ nhiều giá trị thì sẽ phải sử dụng kiểu dữ liệu
        dạng mảng
        Mảng có 3 loại chính :
        1 - mảng chỉ số ( index ) có key là số
        2 - mảng kết hợp ( mảng có key là chuỗi )
        3 - mảng đa chiêu ( mảng lồng mảng )
        Tìm hiểu về mảng chỉ số
        Mảng sẽ chứa nhiều phần tử phân tách bằng dấu ,
        Các phần tử này thì sẽ có 2 thành phần
        thành phần 1 là key ( hiểu đơn giản là số thứ tự )
        thành phần 2 là value ( hiểu là giá trị )

        <img src="Screenshot.png">
    </pre>

    <?php
    $arr1 = array(2,4,6,8,10,12);

    echo "<pre>";
    print_r($arr1);
    echo "</pre>";


    ?>
</body>
</html>