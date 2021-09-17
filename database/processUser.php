<?php
require_once 'connection.php';

$userName = $_POST['userName'];
$userAge = $_POST['userAge'];

if($userName && $userAge){
    $_SESSION['userName'] = $userName;
    $_SESSION['userAge'] = $userAge;

    
    header('Location:../homepage.php');
    
}else{
    unset($_SESSION['userName']);
    unset($_SESSION['userAge']);

    header('Location:../index.php?error=processuser');
}
?>