<?php
    session_start();
    if($_SESSION == NULL){
        header("Location:index.php?error=nosession");
    }
    $nomeusuario = $_SESSION['nomeUsuario'];
    $idadeusuario = $_SESSION['idadeUsuario'];
?>