<?php
    session_start();
    if($_POST['userName'] && $_POST['userAge']){

        $nome = $_POST['userName'];
        $idade = $_POST['userAge'];
    
        $_SESSION['nomeUsuario'] = $nome;
        $_SESSION['idadeUsuario'] = $idade;   

        header("Location:homepage.php");
    }else{
        header("Location:index.php?error=invaliduserinfo");
    }
?>