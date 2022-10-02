<?php
include 'components/header.php';
if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $body = $_POST['feedback'];
    $sql = "INSERT INTO feedback(name, email, body) VALUES(?, ?, ?)";
    try {
        $statement = $connection->prepare($sql);
        $statement->bindParam(1, $name);
        $statement->bindParam(2, $email);
        $statement->bindParam(3, $body);
        $statement->execute();
        //echo "feedback inserted successfully";
        header("Location: feedback_list.php");
    } catch (PDOException $e) {
        echo "Cannot insert feedback into database"
            . $e->getMessage();
    }
}

?>
<!-- navbar -->
<h1>Enter your feedback here</h1>

<form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="POST">
    <div class="input-group mb-3">
        <input type="text" name="name" class="form-control" placeholder="What is your name ?" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group mb-3">
        <input type="email" name="email" class="form-control" placeholder="Enter your email" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    <div class="input-group">
        <textarea name="feedback" class="form-control" aria-label="With textarea"></textarea>
    </div>
    <button type="submit" name="submit" class="btn btn-primary">Send</button>
</form>

<?php include 'components/footer.php'   ?>

</body>

</html>