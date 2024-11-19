<?php
include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $usertask = $_POST['task'];
    $sql = "INSERT INTO `tasks` (task) VALUES ('$usertask');";
    if ($conn->query($sql) === TRUE) {
        header("Location: index.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
