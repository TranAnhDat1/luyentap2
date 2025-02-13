<?php
function demSoTu($chuoi) {
    $tu = str_word_count($chuoi);
    return $tu;
}

$chuoi = "Hello World PHP is awesome!";
echo "Số từ trong chuỗi là: " . demSoTu($chuoi);
?>
