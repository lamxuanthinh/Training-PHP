<?php
    echo 'we talk about conditional<br>';

    $favorite_color = 'red';
    switch($favorite_color) {
        case 'red': 
            echo "you choose RED";
            break;
        case 'red': 
                echo "you choose RED";
            break;
        case 'red': 
            echo "you choose RED";
                break;
            default:
            echo 'no choose color';
    }