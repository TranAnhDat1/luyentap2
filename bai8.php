<?php
function chuyenDoiInHoa($chuoi) {
    return strtoupper($chuoi);
}

$chuoi = "hello world";
echo chuyenDoiInHoa($chuoi); // Kết quả: HELLO WORLD
?>
