<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <h1>Các toán tử phổ biến trong php</h1>
    <h1>Trong php sử dụng dấu . để chuỗi</h1>
    <?php
    $a = 5;
    $b = 2;
    $tong = $a + $b;
    $hieu = $a - $b;
    $tich = $a * $b;
    $thuong = $a / $b;
    $laydu = $a % $b;
    echo "<br>tổng của 2 số " . $tong;
    echo "<br>hiệu của 2 số " . $hieu;
    echo "<br>tich của 2 số " . $tich;
    echo "<br>thuong của 2 số " . $thuong;
    echo "<br>phep chua lay du của 2 số " . $laydu;
    echo "<br>" . "chào " . "hà nội";
    ?>
</body>
</html>