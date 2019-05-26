<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Vòng lặp foreach chỉ dùng để lặp mảng
        cú pháp rút gọn
        foreach($mang as $value) {
            // code thực thi
            echo "br".$value;
        }
        cú pháp đầy đủ
        foreach($mang as $key => $value) {
            // code thực thi
            echo "br" . $key . " - " .$value;
        }
    </pre>

    <?php
    $arr1 = array(2,4,6,8);
    echo "<br> Rút gọn";
    foreach($arr1 as $value) {
        echo "<br>" . $value;
    }
    echo "<br> Đầy đủ";
    foreach($arr1 as $key => $value) {
        echo "<br> key là : " . $key;
        echo "<br> value là : " . $value;
    }
    ?>
</body>
</html>