<?php
function kiemTraSoNguyenTo($n) {
    if ($n <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

echo kiemTraSoNguyenTo(29) ? "29 là số nguyên tố" : "29 không phải là số nguyên tố";
?>
