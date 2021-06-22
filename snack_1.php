<?php
$partite = [
    [
        'casa' => 'Brescia',
        'ospite' => 'Pesaro',
        'puntiCasa' => 86,
        'puntiOspite' => 84,
    ],
    [
        'casa' => 'Brindisi',
        'ospite' => 'varese',
        'puntiCasa' => 108,
        'puntiOspite' => 84,
    ],
    [
        'casa' => 'Cantu',
        'ospite' => 'Sassari',
        'puntiCasa' => 106,
        'puntiOspite' => 101,
    ],
    [
        'casa' => 'Olimpia Milano',
        'ospite' => 'Cremona',
        'puntiCasa' => 74,
        'puntiOspite' => 66,
    ],
    [
        'casa' => 'Reggiana',
        'ospite' => 'Venezia',
        'puntiCasa' => 65,
        'puntiOspite' => 71,
    ],
    [
        'casa' => 'Trieste',
        'ospite' => 'Bologna',
        'puntiCasa' => 88,
        'puntiOspite' => 82,
    ],

];
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 1</title>
</head>
<body>
    <h1>Snack 1</h1>
    <h1>Partite Basket</h1>


    <?php for ($i=0; $i < count($partite); $i++) {
    $partita = $partite[$i]; ?>

    <p>
        <span> <?php echo $partita['casa']; ?> </span>
        <span> - </span>
        <span> <?php echo $partita['ospite']; ?> </span> 
        <span> | </span>
        <span> <?php echo $partita['puntiCasa']; ?> </span>
        <span>-</span>
        <span> <?php echo $partita['puntiOspite']; ?> </span>
    </p>


    <?php
} ?>
</body>
</html>