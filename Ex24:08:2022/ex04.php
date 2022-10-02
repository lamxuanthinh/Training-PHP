<?php
$numbers = array(1, 8, 3, 4, 5, 7);
$length = count($numbers);
$sum = 0;



// 2. xoa phan tu
unset($numbers[1]);
// 3. chen phan tu
array_push($numbers, 10);
echo "4. gia tri trung binh : " . ($sum / $length);
// 5. tim gia tri nho nhat
echo(min($numbers));
//6 tinh gia tri trung binh
foreach ($numbers as $value) {
    $sum += $value;
};
echo "1. lay phan tu dau tien :"  .reset($numbers);
?>