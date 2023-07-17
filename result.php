<?php

$name = $_GET['name'];
$email = $_GET['email'];
$age = $_GET['age'];
$at = '@';
$punto = '.';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (strpos($email, $at) && strpos($email, $punto) && strlen($name) >= 3 && is_numeric($age)) : ?>
        <h1>Accesso Consentito</h1>
    <?php else : ?>
        <h1>Accesso Negato</h1>
    <?php endif ?>
</body>

</html>