<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
    <pre>
        Vòng lặp trong PHP
        Vòng lặp thực hiện chu trình theo 1 số lần nhất
        Ví dụ : Vòng lặp các thứ trong tuần
        Chạy từ chủ nhật cho đến thứ 7 sau đó sẽ lặp lại
        Vòng lặp for :
        1 - điểm bắt đầu của vòng lặp
        2 - điều kiện chạy của vòng lặp
        3 - sự thay đổi của biến đếm sau mỗi lần chạy của vòng lặp

        Cú pháp lệnh for :
        for ( điểm bắt đầu ; điều kiện chạy vòng lặp ; sự thay đổi của biến đếm) {
            // code thực thi của vòng lặp for
        }
    </pre>

    <?php
    echo "In ra các số từ 0 đến 20";
    for($i = 0; $i < 20; $i++) {
        echo "<br> " . $i;
    }
    echo "<br> In ra các số từ 0 đến 19 nhưng chỉ in số chẵn";
    for($i = 0; $i < 20; $i += 2) {
        echo "<br> " . $i;
    }
    echo "<br> In ra các số từ 0 đến 19 nhưng chỉ in số chẵn";
    for($i = 0; $i < 20; $i++) {
        if (($i % 2) == 0) {
            echo "<br> " . $i;
        }
    }
    ?>

</body>
</html>