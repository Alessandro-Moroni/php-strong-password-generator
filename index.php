<?php

session_start();
require __DIR__ . './functions.php';


?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>PHP Strong Password Generator</title>
</head>
<body>
  <div class="container mt-3">
  <h1>PHP Strong Password Generator</h1>

  <form action="index.php" method="POST">
  
    <div class="my-5">
      <p>Seleziona la lunghezza della password</p>
      <input type="number" name="num_password">
    </div>

    <div>
      <button type="submit" class="btn btn-primary">Generate</button>
    </div>

  </form>

  </div>
</body>
</html>