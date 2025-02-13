<?php
function kiemTraNamNhuan($nam) {
    if (($nam % 4 == 0 && $nam % 100 != 0) || ($nam % 400 == 0)) {
        return true;
    }
    return false;
}

echo kiemTraNamNhuan(2024) ? "2024 là năm nhuận" : "2024 không phải là năm nhuận";
?>
