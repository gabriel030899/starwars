<?php

//include 'processUser.php';
//var_dump($_SESSION['userName']);

if(!$_SESSION['userName'] && !$_SESSION['userAge']){
    unset($_SESSION['userName']);
    unset($_SESSION['userAge']);

    header('location:index.php?error=nousersession');
}

?>