<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<h1>Truyền tham chiếu và truyền tham trị cho function</h1>

<pre>
    - truyền tham trị là chỉ truyền giá trị
    - truyền tham chiếu hiểu 1 cách đơn giản là 2 biến sẽ cùng tham chiếu đến 1 ô nhớ
    khi 1 biến thay đổi thì biến còn lại cũng thay đổi
</pre>

<?php
// truyen tham tri
$a = 5;
function truyenthamtri($b) {
    $b = $b * 2;
}

truyenthamtri($a);
echo '$a là : ' . $a;

// truyen tham chieu
$c = 10;
function truyenthamchieu(&$d) {
    $d = $d * 2;
}

/**
 * hiểu $c và $d sẽ tham chiếu đến cùng 1 ô nhớ
 * khi mà biến $d bị thay đổi thì biến $c cũng bị thay đổi theo
 * và người lại
 */
truyenthamchieu($c);

echo '<br>$c là : ' . $c;
?>

</body>
</html>