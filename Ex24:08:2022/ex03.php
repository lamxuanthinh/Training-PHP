<?php
    $arrayNumbers = array(1,3,9,4,7,1,3,5);
    sort($arrayNumbers);
    foreach( $arrayNumbers as $value ) {
        echo $value. " ";
     };
    print_r(array_unique($arrayNumbers));
?>