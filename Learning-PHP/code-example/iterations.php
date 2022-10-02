<?php
    echo 'we talk about Iterations <br>';
    for($i = 0 ; $i <= 10; $i++){
        echo $i;
    };
    $i = 0;
    while($i < 10) {
        echo $i;
        $i++;   
    };
    do {
        echo $i;
        $i++;  
    }while($i < 10);

    // foreach 
    $fruits = ['apple', 'orange', 'lemon'];
    // for($i =  0; $i < count($fruits); $i++){
    //     echo $fruits[$i];
    // };
    foreach($fruits as $fruit) {
        echo $fruit;
    }
    foreach($fruits as $key => $fruit) {
        echo $fruit;
    }