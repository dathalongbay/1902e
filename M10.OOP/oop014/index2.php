<?php

function helloWord($str) {
    echo "<br> Hello".$str;
}


/**
 * Lambda Hàm không tên
 * @param $str
 *
 */

/**
 * Clouse là lambda nhưng có thể sử dụng nhưng biến bên ngoài
 * @param $str
 */
$lang = " PHP";

$hello = function($str) use ($lang){
    echo "<br> Hello ".$str.$lang;
};

// Gọi lambda khi được gán vào biến
$hello("World");