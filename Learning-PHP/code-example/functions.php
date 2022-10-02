<?php
    echo 'we talk about functions<br>';
    function sayHello($name) {
        echo "hello $name";
    };
    sayHello('thinh');

    // $substract = fn($a, $b) => {
    //     return $a + $b;
    // };
    // echo $substract(1, 3);

    $name = ['thinh', 'lan'];
    echo count($name);
    echo in_array('trang', $name);
    var_dump(in_array('lan', $name));
    // them cuoi
    array_push($name, 'trang');
    // them dau
    array_unshift($name, 'thuy');
    // xoa cuoi
    array_pop($name);
    // xoa dau
    array_shift($name);
    // xoa bat ki
    unset($name['thinh']);
    $array_one = [1,2,3];
    $array_two = [4,5,6];
    $merged_array = array_merge($array_one, $array_two);
    print_r($merged_array);
    print_r($name);
