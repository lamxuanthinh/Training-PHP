<?php
$result = 1;
$heso_a = $_POST['heso_a'];


function gaiThua($heso_a, $result)
{
    if ($heso_a == 0 || $heso_a == 1) {
        echo 1;
    } else {
        for ($i = 1; $i <= $heso_a; $i++) {
            $result *= $i;
        }
        echo $result;
    }

}

gaiThua($heso_a, $result)




?>


<form action="#" method="post">
    <table>
        <tr>
            <td>the enter number : </td>
            <td><input type="text" name="heso_a" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<br>