<?php

function passwordRandom() {

  
  if(isset($_POST['num_password'])){
    $passString = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!?&%$<>^+-*/()[]{}@#_=";
    // creo un array
    $password = array();
    // creo una costante per sapere il numero della stringa
    $passLength = strlen($passString) - 1;
    // creo una costante che si collega l'input dove verrà inserito il numero di caratteri
    $randomNumber = $_POST['num_password'];
    for ($i = 0; $i < $randomNumber; $i++) {
        // creo una costante per selezionare casualmente un elemento all'interno della stringa diventata array
        $num = rand(0, $passLength);
        // pusho dentro un array gli elementi estratti dal ciclo for
        $password[] = $passString[$num];
    }
    // implode trasforma l'array in stringa
    return implode($password);
    
  }

  
}

if(isset($_POST['num_password'])){
    
  session_start();

  $_SESSION['password_finale'] = passwordRandom();

  header('Location: /redirect.php');
}

?>