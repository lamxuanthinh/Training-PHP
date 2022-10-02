<?php 
 $numbers = array( 1, 8, 3, 4, 5,7);
 $length = count($numbers);
 $sum= 0;
 find3small($numbers, $length);
 find3largest($numbers, $length);

 foreach( $numbers as $value ) {
    $sum += $value;
 };
echo $sum / $length;

function find3largest($numbers , $length)
{
    sort($numbers);
    $check = 0;
    $count = 1;
    for ($i = 1 ; $i <= $length; $i++) {
        if ($count < 4) {
            if ($check != $numbers[$length - $i]) {
                echo  $numbers[$length - $i].  " ";
                $check = $numbers[$length - $i];
                $count++;
            }
        }
        else
            break;
    }
}

function find3small($numbers , $length)
{
    sort($numbers);
    $check = 0;
    $count = 1;
    for ($i = 0 ; $i <= $length; $i++) {
        if ($count < 4) {
            if ($check != $numbers[$i++]) {
                echo  $numbers[$i++].  " ";
                $check = $numbers[$i++];
                $count++;
            }
        }
        else
            break;
    }
}
?>