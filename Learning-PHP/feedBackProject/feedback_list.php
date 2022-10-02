<?php
include 'components/header.php';
echo "<h1>list of feedbacks here</h1>";
$sql = "SELECT name, email, body from feedback;";
if ($connection != null) {
    try {
        $statement = $connection->prepare($sql);
        // send down database
        $statement->execute();
        $result = $statement->setFetchMode(PDO::FETCH_ASSOC);
        $feedbacks = $statement->fetchAll();
        // print_r($feedbacks);
        echo '<ul class="list-group">';
        foreach ($feedbacks as $feedback) {
            $name = $feedback['name'] ?? '';
            $email = $feedback['email'] ?? '';
            $body = $feedback['body'] ?? '';
            echo "<li class='list-group-item'>";
            echo "<p>$name</p>";
            echo "<p>$email</p>";
            echo "<p>$body</p>";
            echo "</li>";
            //echo "<h3>$name, $email, $body</h3>";
        }
        echo '</ul>';
    } catch (PDOException $e) {
        echo $e;
    }
}
include 'components/footer.php';
