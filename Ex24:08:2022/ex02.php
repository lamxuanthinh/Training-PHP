<?php

$students = array(
0 => 'Lam xuan thinh',
1 => 'Vo hung toan tam',
2 => 'Nguyen van khoa',
3 => 'Tran Sy Quy',
4 => 'Van Viet Vuong'
);

foreach ($students as $key => $val) {
$students[end(explode(" ", $val))] = $students[$key];
unset($students[$key]);
}

echo "<h3>Tên các sinh viên sau khi sắp xếp theo Alphabet (A - Z)</h3>";
ksort($students);
foreach($students as $key => $val) {
echo $val. "<br/>" ;
}
?>