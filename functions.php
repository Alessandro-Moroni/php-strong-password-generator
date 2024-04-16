<?php

function passwordRandom() {
  $passString = "ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz0123456789!?&%$<>^+-*/()[]{}@#_=";
  $password = array();
  $passLength = strlen($passString) - 1;
  $randomNumber = $_GET['num_password'];
  for ($i = 0; $i < $randomNumber; $i++) {
      $num = rand(0, $passLength);
      $password[] = $passString[$num];
  }
  return implode($password);
}

?>