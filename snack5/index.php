<?php 
//Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.

$paragraph = 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Omnis repudiandae doloremque quod beatae fugit excepturi. debitis fuga consequuntur consequatur minus. sequi facere nulla eos distinctio hic architecto dicta praesentium suscipit';

echo $paragraph;

$newParagraph = explode(".", $paragraph);
var_dump($newParagraph);

for ($i = 0; $i < count($newParagraph); $i++){
  echo "<p>{$newParagraph[$i]}.</p>";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 05</title>
</head>
<body>
  
</body>
</html>