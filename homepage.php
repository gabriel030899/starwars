<?php
session_start();
include 'database/connection.php';
//include 'database/userSession.php';


$name = $_SESSION['userName'];
$age = $_SESSION['userAge'];

var_dump($name);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Star Wars</title>
</head>
<body>
    <?php 
        echo "Hello, $name";
    ?>
</body>
</html>