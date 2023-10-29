<?php
  $error = "";

  include __DIR__ . "/partials/functions.php";

  if(isset($_POST["lunghezza"])){
    if($_POST["lunghezza"] === "8" || $_POST["lunghezza"] === "16" || $_POST["lunghezza"] === "24" || $_POST["lunghezza"] === "32"){
      $psw = passGen();
      session_start();
      $_SESSION["psw"] = $psw;
      header("Location: arrival.php");
    }else{
      $error = "Errore! Selezionare un numero di caratteri per la password";
    }
  }

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

  <title>Password generator</title>
</head>
<body class="bg-primary-subtle">
  <div class="container w-50 mt-3 text-center">
    <h1 class="text-secondary">Strong Password Generator</h1>
    <h2 class="text-light">Genera una password sicura</h2>
    <div class="bg-info-subtle p-2">
      <p>Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</p>
      <p class="text-danger"><?php echo $error ?></p>
    </div>
    <form action="index.php" method="POST" class="mt-4 bg-light p-3">
      <div class="d-flex mb-3 justify-content-between ">
        <span>Lunghezza password:</span>
        <select name="lunghezza" class="form-select w-50" aria-label="Default select example">
          <option selected>Numero di caratteri</option>
          <option value="8">8</option>
          <option value="16">16</option>
          <option value="24">24</option>
          <option value="32">32</option>
        </select>
      </div>
      <div class="text-start">
        <button class="btn btn-primary">Invia</button>
      </div>
    </form>
  </div>
</body>
</html>