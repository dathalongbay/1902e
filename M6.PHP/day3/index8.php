<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Các cách khai báo mảng chỉ số
        Chú ý mảng chỉ số bắt đầu 0
    </pre>

    <?php
    // Cách 1 : truyền value vào
    $arr1 = array(2,4,6,8,10);

    // Cách 2 : truyền cả key và value vào
    $arr2 = array(0 => 2, 1 => 4, 2 => 6, 3 => 8, 4 => 10);


    // Cách 3 : khai báo mảng trước
    // rồi mới gán giá trị cho các phần từ
    $arr3 = array();
    $arr3[] = 2;
    $arr3[] = 4;
    $arr3[] = 6;
    $arr3[] = 8;
    $arr3[] = 10;

    // Cách số 4 gần giống cách số 3 nhưng sẽ truyền key vào
    $arr4 = array();
    $arr4[0] = 2;
    $arr4[1] = 4;
    $arr4[2] = 6;
    $arr4[3] = 8;
    $arr4[4] = 10;
    ?>
</body>
</html>