<?php

$heso_a = "";
$heso_b = "";
$heso_c = "";

if (isset($_POST['heso_a'])) {
    $heso_a = $_POST['heso_a'];
}
if (isset($_POST['heso_b'])) {
    $heso_b = $_POST['heso_b'];
}
if (isset($_POST['heso_c'])) {
    $heso_c = $_POST['heso_c'];
}

function PTB2($a, $b, $c)
{

    if ($a == "")
        $a = 0;
    if ($b == "")
        $b = 0;
    if ($c == "")
        $c = 0;

    echo "Phương trình: " . $a . "x2 + " . $b . "x + " . $c . " = 0";
    echo "<br>";

    if ($a == 0) {
        if ($b == 0) {
            echo ("Phương trình vô nghiệm!");
        } else {
            echo ("Phương trình có một nghiệm: " . "x = " . (-$c / $b));
        }
        return;
    }

    $delta = $b * $b - 4 * $a * $c;
    $x1 = "";
    $x2 = "";

    if ($delta > 0) {
        $x1 = (-$b + sqrt($delta)) / (2 * $a);
        $x2 = (-$b - sqrt($delta)) / (2 * $a);
        echo ("Phương trình có 2 nghiệm là: " . "x1 = " . $x1 . " và x2 = " . $x2);
    } else if ($delta == 0) {
        $x1 = (-$b / (2 * $a));
        echo ("Phương trình có nghiệm kép: x1 = x2 = " . $x1);
    } else {
        echo ("Phương trình vô nghiệm!");
    }
}
?>

<form action="#" method="post">
    <table>
        <tr>
            <td>Hệ số bậc 2, a</td>
            <td><input type="text" name="heso_a" value="<?= $heso_a ?>" /></td>
        </tr>
        <tr>
            <td>Hệ số bậc 1, b</td>
            <td><input type="text" name="heso_b" value="<?= $heso_b ?>" /></td>
        </tr>
        <tr>
            <td>Hệ số tự do, c</td>
            <td><input type="text" name="heso_c" value="<?= $heso_c ?>" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<br>


<?php

if (
    is_numeric($GLOBALS['heso_a']) && is_numeric($GLOBALS['heso_b'])
    && is_numeric($GLOBALS['heso_c'])
) {
    PTB2($GLOBALS['heso_a'], $GLOBALS['heso_b'], $GLOBALS['heso_c']);
} else {
    echo ("Giá trị input không hợp lệ!");
}
?>