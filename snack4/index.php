<?php 
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$numArray = [];
$arrayLength = 15;
$min = 1;
$max = 50;

if(($max - $min) <= $arrayLength){
  $arrayLength = $max - $min;
}

while (count($numArray) < $arrayLength) {
  $randomNumber = rand($min, $max);
  $newInt = $randomNumber;
  //echo $newInt;
  if(!in_array($randomNumber, $numArray)){
    $numArray[] = $randomNumber;
  }
};

var_dump($numArray);


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 04</title>
</head>
<body>
  
</body>
</html>