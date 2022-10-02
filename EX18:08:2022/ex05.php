<?php

$data1 = $_POST['data1'];
$data2 = $_POST['data2'];

$count =  substr_count($data1, $data2);
if ($count > 0) {
    echo "s1 and s2 have loop";
} else {
    echo "s1 and s2 have not loop";
}
?>


<form action="#" method="post">
    <table>
        <tr>
            <td>the enter string 01 is : </td>
            <td><input type="text" name="data1" /></td>
        </tr>
        <tr>
            <td>the enter string string 02 is : </td>
            <td><input type="text" name="data2" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<br>