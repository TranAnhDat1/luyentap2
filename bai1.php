<?php
function mayTinh($a, $b, $phepTinh) {
    switch ($phepTinh) {
        case '+':
            return $a + $b;
        case '-':
            return $a - $b;
        case '*':
            return $a * $b;
        case '/':
            if ($b == 0) {
                return "Lỗi: Không thể chia cho 0.";
            }
            return $a / $b;
        default:
            return "Lỗi: Phép tính không hợp lệ.";
    }
}

echo mayTinh(10, 5, '+'); // Kết quả: 15
echo "<br>";
echo mayTinh(10, 5, '-'); // Kết quả: 5
echo "<br>";
echo mayTinh(10, 5, '*'); // Kết quả: 50
echo "<br>";
echo mayTinh(10, 0, '/'); // Kết quả: Lỗi: Không thể chia cho 0.
?>
