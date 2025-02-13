<?php
function kiemTraChanLe($n) {
    if ($n % 2 == 0) {
        echo "Số $n là số chẵn.";
    } else {
        echo "Số $n là số lẻ.";
    }
}

kiemTraChanLe(5); // Kết quả: Số 5 là số lẻ.
?>
