<?php

function passwordRandom() {

  
  if(isset($_POST['num_password'])){
    $passString = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!?&%$<>^+-*/()[]{}@#_=";
    $password = array();
    $passLength = strlen($passString) - 1;
    $randomNumber = $_POST['num_password'];
    for ($i = 0; $i < $randomNumber; $i++) {
        $num = rand(0, $passLength);
        $password[] = $passString[$num];
    }
    return implode($password);
    
  }

  
}

if(isset($_POST['num_password'])){
    
  session_start();

  $_SESSION['password_finale'] = passwordRandom();

  header('Location: ./redirect.php');
}

?>