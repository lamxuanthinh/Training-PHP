<?php

$data1 = $_POST['data1'];
$data2 = $_POST['data2'];
$data3 = $_POST['data3'];

echo "Full name is : " . $data1 . "<br/>";
echo "Age is : " . $data2 . "<br/>";
echo "Class is  : " . $data3 . "<br/>";
 
?>
<form action="#" method="post">
    <table>
        <tr>    
            <td>the enter full name is : </td>
            <td><input type="text" name="data1" /></td>
        </tr>
        <tr>
            <td>the enter age is : </td>
            <td><input type="text" name="data2" /></td>
        </tr>
        <tr>
            <td>the enter class is : </td>
            <td><input type="text" name="data3" /></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" value="Kết quả"></td>
        </tr>
    </table>
</form>
<br>