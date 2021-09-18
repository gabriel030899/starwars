<?php
session_start();
require_once 'database/connection.php';
require_once 'userSession.php';

$name = $_SESSION['userName'];
$age = $_SESSION['userAge'];
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
        echo "Hello, <b>$name</b><br>I guess your age is <b>$age</b>";
    ?>
</body>
</html>