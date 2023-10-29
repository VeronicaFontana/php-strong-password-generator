<?php

session_start();

if(isset($_SESSION["psw"])){
  $psw = $_SESSION["psw"];
}else{
  header("Location: index.php");
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
    <h1 class="text-light">La password generata è:</h1>
    <div class="bg-info-subtle p-2">
      <span><?php echo $psw  ?></span>
    </div>
  </div>
</body>
</html>