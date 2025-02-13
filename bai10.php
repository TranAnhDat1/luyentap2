<?php
function tachChuoi($chuoi, $kyTuPhanCach) {
    return explode($kyTuPhanCach, $chuoi);
}

$chuoi = "apple,banana,orange";
$kyTuPhanCach = ",";
$ketQua = tachChuoi($chuoi, $kyTuPhanCach);

echo "Mảng các phần tử: ";
print_r($ketQua);
?>
