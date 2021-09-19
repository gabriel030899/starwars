<?php

class ProcessUser{

public $userName;
public $userAge;

public function processData($userName, $userAge){
    if($_SESSION != NULL){

        unset($_SESSION['userName']);
        unset($_SESSION['userAge']);
        
    }else{
        if($userName && $userAge){
            $_SESSION['userName'] = $userName;
            $_SESSION['userAge'] = $userAge;

            header('Location:homepage.php');
            
        }else{
            unset($_SESSION['userName']);
            unset($_SESSION['userAge']);
            
            header('Location:index.php?error=processuser');
        }
    }
}


}