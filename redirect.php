<?php

session_start();


require __DIR__ . '/functions.php';

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <title>Document</title>
</head>
<body>
  <div class="container mt-5 ">
    <h2>Password generata: <?php echo $_SESSION['password_finale'] ?></h2>

    <a href="logout.php">Logout pagina iniziale</a>
  </div>
  
</body>
</html>