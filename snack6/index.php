<?php 
//Utilizzare questo array: https://pastebin.com/CkX3680A. Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.

$db = [
  'teachers' => [
      [
          'name' => 'Michele',
          'lastname' => 'Papagni'
      ],
      [
          'name' => 'Fabio',
          'lastname' => 'Forghieri'
      ]
  ],
  'pm' => [
      [
          'name' => 'Roberto',
          'lastname' => 'Marazzini'
      ],
      [
          'name' => 'Federico',
          'lastname' => 'Pellegrini'
      ]
  ]
];


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Snack 06</title>
  <style>
      *{ margin: 0; padding: 0; box-sizing: border-box; }

      .grey{ background-color: grey; }

      .green{ background-color: green; }

      .grey,
      .green{float: left; width: 50%; padding: 15px;}
  </style>
</head> 
<body>
    <div class="grey">
        <h2>Teachers</h2>
        <ul>
            <?php foreach ($db['teachers'] as $teacher){?>
             <li>
                 <?php echo $teacher['name'] ?>
                 <?php echo $teacher['lastname'] ?>
             </li> <?php } ?>
        </ul>
    </div>
    <div class="green">
        <h2>Pm's</h2>
        <ul>
            <?php foreach ($db['pm'] as $pms){?>
             <li>
                 <?php echo $pms['name'] ?>
                 <?php echo $pms['lastname'] ?>
             </li> <?php } ?>
        </ul>
    </div>
  
</body>
</html>