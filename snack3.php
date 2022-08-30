<?php
/* Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato:
DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data.
Stampare ogni data con i relativi post. */

$dates_post = [
  '01-01-2007' => [
      'ciao',
      'aoo',
      'sisi',
  ],
  '02-05-2017' => [
      'riew',
      'opp',
      'weee',
      'kata',
  ],
  '06-09-2019' => [
      'rick',
      'lorem Ips',
      'consectetur adipiscing elit',
      'operated sdet',
  ],
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <ul>
    <?php foreach ($dates_post as $date) : ?>
      <li>
        Posts:
        <ul>
          <?php for($i=0;$i<count($date);$i++) { ?>
            <li><?=$date[$i]?></li>
          <?php } ?>
        </ul>
      </li>
    <?php endforeach; ?>
  </ul>
</body>
</html>
