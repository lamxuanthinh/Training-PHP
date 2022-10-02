<?php
echo 'sessions in PHP';
// session_start();
// $_SESSION['email'] ='thinhlam749@gmail.com';
// if(isset($_SESSION['email']))
// echo $_SESSION['email'];

session_start();
if (isset($_POST['submit'])) {
    $email = htmlspecialchars($_POST['email']);
    $password = htmlspecialchars($_POST['password']);
    if (
        $email == "thinhlam749@gmail.com"
        && $password == "123"
    ) {
        $_SESSION['email'] = $email;
        header('Location: dashboard.php');// next page
    } else {
        echo "Incorrect email/ password";
        session_destroy();
    }
}
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
    <h1>Login to your account</h1>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
        <div>
            <label for="email">Email</label>
            <input type="text" name="email">
        </div>
        <div>
            <label for="age">PassWord</label>
            <input type="password" name="password">
        </div>
        <input type="submit" value="Login" name="submit">
    </form>
</body>

</html>