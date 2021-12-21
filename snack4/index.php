<?php 
//Creare un array con 15 numeri casuali, tenendo conto che l’array non dovrà contenere lo stesso numero più di una volta

$numArray = [];
$arrayLength = 15;
$min = 50;
$max = 45;


if(abs($max - $min) <= $arrayLength){
  $arrayLength = abs($max - $min);
}

while (count($numArray) < $arrayLength) {
  $randomNumber = rand($min, $max);
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