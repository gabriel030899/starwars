<?php
session_start();
if($_SESSION){
    unset($_SESSION);
    header("Location:../index.php?error=nomoresession");
}
?>