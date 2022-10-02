<?php

$data1 = $_POST['data1'];
$data2 = $_POST['data2'];

echo substr_count($data1, $data2)

?>


<form action="#" method="post">
    <table>
        <tr>
            <td>the enter string is : </td>
            <td><input type="text" name="data1" /></td>
        </tr>
        <tr>
            <td>the enter string string number loop is : </td>
            <td><input type="text" name="data2" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<br>