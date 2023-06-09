<?php

  // Importo la funzione per la generazione della password
  include './partials/functions.php';

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
  <link rel="stylesheet" href="css/style.css">
  <title>PHP Strong Password Generator</title>
</head>

<body>
  <div class="wrapper container d-flex flex-column justify-content-center align-items-center">
    <header class="text-center pb-4">
      <h1 class="text-success">Genera la tua password</h1>
    </header>
    <main>
      <form action="index.php" method='GET'>
        <label for="password_length">Sicurezza password: </label>

        <!-- Controllo interno della lunghezza dei caratteri al campo input -->
        <input type="number" name="password_length" id="password_length" min="8" max="30"
          placeholder="Ins. un numero da 8 a 30">
        <input type="submit" value="Genera Password" class="m-2 p-1 bg-primary rounded-2 text-white">

      </form>
        <?php

          /* serve a controllare se l'utente ha inserito un valore valido per il parametro richiesto (nel caso specifico, il parametro "numero"). 
          Se il valore inserito non è valido, viene stampato un messaggio di errore */

          if(isset($_GET['password_length'])){
            $password_length= $_GET['password_length'];
            if(isset($_GET['password_length']) && !empty($_GET['password_length'])) {
            echo "Password generata: " .generate_password($password_length);
            } else {
            echo "<h4 class='text-danger'>Errore: il campo è vuoto!</h4>";
            }
          }

        ?>
    </main>
  </div>
</body>

</html>