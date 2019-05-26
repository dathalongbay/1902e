<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Mảng kết hợp là mảng có ít nhất 1 key là chuỗi
    </pre>

    <?php

    // cach 1 :
    $cities = array(
        'hn' => 'Hà nội',
        'dn' => 'Đà nẵng',
        'hcm' => 'Hồ chí minh',
        'ct' => 'Cần thơ',
        'hp' => 'Hải phòng',
    );

    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    // cach 2
    $cities = array();
    $cities['hn'] = "Hà nội";
    $cities['dn'] = "Đà nẵng";
    $cities['hcm'] = "Hồ chí minh";
    $cities['ct'] = "Cần thơ";
    $cities['hp'] = "Hải phòng";

    echo "<pre>";
    print_r($cities);
    echo "</pre>";

    // Truy cập vào các phần tử của mảng qua key
    echo '<br>$cities["hn"] : ' . $cities['hn'];
    echo '<br>$cities["hcm"] : ' . $cities['hcm'];

    foreach($cities as $key_city => $city) {
        echo "<br>key " . $key_city;
        echo "<br>value " . $city;
    }
    ?>
</body>
</html>