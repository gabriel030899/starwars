<?php
require_once 'connection.php';

$userName = $_POST['userName'];
$userAge = $_POST['userAge'];

if($userName && $userAge){
    header('Location:../homepage.php');
}else{
    header('Location:../index.php?error=noinfo');
}