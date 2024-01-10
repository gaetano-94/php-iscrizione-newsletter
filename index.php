<?php
// Include il file functions.php
include 'functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>PHP Iscrizione Newsletter</title>
  <!-- BOOTSTRAP -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <!-- /BOOTSTRAP -->
</head>

<body>
  <div class="container mt-5">
    <!-- Form per l'inserimento dell'indirizzo email -->
    <form method="GET" action="index.php">
      <div class="form-group">
        <label for="emailInput">Indirizzo Email:</label>
        <input type="text" class="form-control" id="emailInput" name="email" placeholder="Inserisci l'indirizzo email">
      </div>
      <button type="submit" class="btn btn-primary mt-2">Invia</button>
    </form>
    <?php
    // Controlla se il parametro email è impostato nel GET
    if (isset($_GET['email'])) {
      $email = $_GET['email'];
      // Utilizza la funzione validateEmail
      if (validateEmail($email)) {
        echo '<div class="alert alert-success mt-3" role="alert">Successo: La mail contiene un punto e una chiocciola!</div>';
      } else {
        echo '<div class="alert alert-danger mt-3" role="alert">Errore: La mail NON contiene un punto e una chiocciola!</div>';
      }
    }
    ?>
  </div>

</body>

</html>