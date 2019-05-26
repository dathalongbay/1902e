<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Vòng lặp while
    Cú pháp :
    điểm khởi đầu của vòng lặp
    while(điều kiện chạy của vòng lặp) {
        // code thực thi bên trong vòng lặp


        // cuối vòng lặp
        sự thay đổi của biến đếm sau mỗi lần chạy
    }

</pre>

<?php
echo "<br>In ra các từ 0 đến 19";
$i = 0;
while($i < 20) {
    echo "<br> $i";
    $i++;
}


echo "<br>In ra các chẵn từ 0 đến 19";

$i = 0;
while($i < 20) {
    echo "<br> $i";
    $i += 2;
}
echo "<br>In ra các chẵn từ 0 đến 19";

$i = 0;
while($i < 20) {

    if (($i % 2) == 0) {
        echo "<br> $i";
    }

    $i ++;
}
?>


</body>
</html>