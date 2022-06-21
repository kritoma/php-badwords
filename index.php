<?php
    $testo = 'Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veritatis sed officiis quos laudantium, praesentium incidunt? Exercitationem expedita fuga tempora a sunt dolor, consequuntur placeat mollitia earum. Quos, unde! Laboriosam, libero.';

    $paroleCensurate = $_GET['parola'];

    $testoCensurato = str_replace($paroleCensurate, '***', $testo);
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
    <h1>Paragrafo</h1>
    <p><?= $testo ?></p>
    <p>Lunghezza: <?= strlen($testo) ?></p>

    <h2>Paragrafo censurato</h2>
    <p><?= $testoCensurato ?></p>
    <p>Lunghezza: <?= strlen($testoCensurato) ?></p>
</body>
</html>