<?php
$games = [
    [
        'first_squad' => 'Roma',
        'second_squad' => 'Lazio',
        'first_squad_result' => 2,
        'second_squad_result' => 2,
    ],
    [
        'first_squad' => 'Inter',
        'second_squad' => 'Milan',
        'first_squad_result' => 0,
        'second_squad_result' => 2,
    ],
    [
        'first_squad' => 'Torino',
        'second_squad' => 'Juventus',
        'first_squad_result' => 12,
        'second_squad_result' => 2,
    ],
    [
        'first_squad' => 'Atalanta',
        'second_squad' => 'Cagliari',
        'first_squad_result' => 4,
        'second_squad_result' => 2,
    ],
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <ul>
        <?php foreach ($games as $game) : ?>
            <li>
                <h1><?= $game['first_squad'] ?> VS <?= $game['second_squad'] ?></h1>
                <h3><?= $game['first_squad_result'] ?> | <?= $game['second_squad_result'] ?></h3>
            </li>
        <?php endforeach ?>
    </ul>
</body>

</html>