<?php
echo 'we talk about Super Global<br>';
// var_dump($_SERVER);
// print_r($_GET);
// print_r($_POST);
// if(isset($_GET['name'])) {
//     echo $_GET['name'];
// }
// $name = $_GET['name'] ?? '';
// $age = $_GET['age'] ?? '';
$name = $_POST['name'] ?? '';
$age = $_POST['age'] ?? '';
echo $name . "<br>";
echo $age;
// echo htmlspecialchars($name);
// echo htmlspecialchars($age);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="name">Name :</label>
            <input type="text" name="name">
        </div>

        <div>
            <label for="age">Age :</label>
            <input type="text" name="age">
        </div>
        <input type="submit" value="Submit1" name="submit">
    </form>

</body>

</html>