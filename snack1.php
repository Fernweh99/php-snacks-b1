<?php
/* Creiamo un array contenente le partite di basket di un’ipotetica tappa del calendario.
Ogni array avrà una squadra di casa e una squadra ospite, punti fatti dalla squadra
di casa e punti fatti dalla squadra ospite. Stampiamo a schermo tutte le partite con questo schema.
Olimpia Milano - Cantù | 55-60 */

$matches = [
  '0' => [
    'home_team' => [
      'name' => 'Olimpia Milano',
      'points' => '55',
    ],
    'away_team' =>[
      'name' => 'Cantù',
      'points' => '60',
    ]
  ],
  '1' => [
    'home_team' => [
      'name' => 'Los Angeles Lakers',
      'points' => '63',
    ],
    'away_team' =>[
      'name' => 'Chichago Bulls',
      'points' => '66',
    ]
  ],
  '2' => [
    'home_team' => [
      'name' => 'New York Knicks',
      'points' => '57',
    ],
    'away_team' =>[
      'name' => 'Toronto Raptors',
      'points' => '62',
    ]
  ],
  '3' => [
    'home_team' => [
      'name' => 'Napoli Basket',
      'points' => '60',
    ],
    'away_team' =>[
      'name' => 'New Basket Brindisi',
      'points' => '55',
    ]
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
    <?php for ($i=0; $i<count($matches); $i++) : ?>
      <li>
        <p>
          <?=$matches[$i]['home_team']['name']?> - 
          <?=$matches[$i]['away_team']['name']?> |
          <?=$matches[$i]['home_team']['points']?> -
          <?=$matches[$i]['away_team']['points']?>
        </p>
      </li>
    <?php endfor ?>
  </ul>
</body>
</html>