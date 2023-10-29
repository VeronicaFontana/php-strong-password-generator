<?php
  function passGen(){
    for($i = 0; $i < $_POST["lunghezza"]; $i++){
      $random = rand(1, 80);
      $randomNum[] = $random;
    }

    foreach($randomNum as $number){
      $numLettArr = [1,2,3,4,5,6,7,8,9,"a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z","A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z","!", "@", "#", "$", "%", "&", "*", "_", "-", "+", "=", "?", ".", ":", ";", "|", "/", "~"];
      $password[] = $numLettArr[$number];
    }
    $psw = implode("", $password);
    return $psw;
  }