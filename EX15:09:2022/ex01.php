<?php

$array = array();
$array[0] = rand(1, 9);
$array[1] = rand(1, 9);
$array[2] = rand(1, 9);

print_r($array) ;

echo max($array) .  "<br>";
echo min($array) .  "<br>";
$sum = 0;
foreach ($array as $key => $value) {
    $sum += $value;
};

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>ex01</title>
</head>

<body>
    <input class="data" type="text" />
    <button class="button">submit</button>

    <script>
        const data = document.querySelector('.data');
        const button = document.querySelector('.button');
        data.oninput = (e) => {
            input = e.target.value;
            console.log(e.target.value)
        }
        button.onclick = () => {
            // console.log(data);
            console.log(1);
        }
    </script>

</body>

</html>