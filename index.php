<?php
  $error = "";

  if(isset($_POST["lunghezza"])){
    echo "ok";
    if($_POST["lunghezza"] === "1"){
      echo "8";
    }elseif($_POST["lunghezza"] === "2"){
      echo "16";
    }elseif($_POST["lunghezza"] === "3"){
      echo "24";
    }elseif($_POST["lunghezza"] === "4"){
      echo "32";
    }else{
      echo "non funziona";
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

  <title>Document</title>
</head>
<body class="bg-primary-subtle">
  <div class="container w-50 mt-3 text-center">
    <h1 class="text-secondary">Strong Password Generator</h1>
    <h2 class="text-light">Genera una password sicura</h2>
    <div class="bg-info-subtle p-2">
      <p>Scegliere una password con un minimo di 8 caratteri e un massimo di 32 caratteri</p>
    </div>
    <form action="index.php" method="POST" class="mt-4 bg-light p-3">
      <div class="d-flex mb-3 justify-content-between ">
        <span>Lunghezza password:</span>
        <select name="lunghezza" class="form-select w-50" aria-label="Default select example">
          <option selected>Numero di caratteri</option>
          <option value="1">8</option>
          <option value="2">16</option>
          <option value="3">24</option>
          <option value="4">32</option>
        </select>
      </div>
      <div class="text-start">
        <button class="btn btn-primary">Invia</button>
        <button class="btn btn-secondary">Annulla</button>
      </div>
    </form>
  </div>
</body>
</html>