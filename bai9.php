<?php
function demKyTuXuatHien($chuoi, $kyTu) {
    return substr_count($chuoi, $kyTu);
}

$chuoi = "hello world";
$kyTu = "o";
echo "Số lần xuất hiện của '$kyTu' trong chuỗi là: " . demKyTuXuatHien($chuoi, $kyTu);
?>
