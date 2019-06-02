<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>

<pre>
    Điểm chung của hàm include , require , include_once , require_once
    là cả 4 hàm này đều được sử dụng để nạp 1 file php vào file khác

    Điểm khác nhau :
    1 - include ( nạp file nếu gặp lỗi trong quá trình nạp file thì nó vẫn chạy tiếp )
    2 - inlude_once ( nạp file nếu gặp lỗi trong quá trình nạp file thì nó vẫn chạy tiếp
    nhưng nếu gọi inlude 2 lần thì php sẽ nạp 2 lần
    còn nếu nập nhiều lần với inlude_once thì php cũng chỉ nạp 1 lần )
    3 - require ( nạp file nếu gặp lỗi trong quá trình nạp file thì nó dừng lại )
    4 - require_once ( nạp file nếu gặp lỗi trong quá trình nạp file thì nó dừng lại
    nhưng chỉ nạp 1 lần duy nhất)
</pre>
</body>
</html>