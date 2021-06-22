<?php

$studenti =[
    [
        'name' => 'Marco',
        'lastname' => 'Bertolin',
        'voti' => [7,9,10,6,8],
    ],
    [
        'name' => 'Alessandro',
        'lastname' => 'Rossi',
        'voti' => [8,4,10,7,3],
    ],[
        'name' => 'ALberto',
        'lastname' => 'Pellegrini',
        'voti' => [7,10,10,8,8],
    ],[
        'name' => 'Andrea',
        'lastname' => 'Berto',
        'voti' => [6,7,6,4,8],
    ],[
        'name' => 'Luigi',
        'lastname' => 'Frison',
        'voti' => [5,9,9,7,7],
    ],[
        'name' => 'Ale',
        'lastname' => 'Nicoletto',
        'voti' => [3,6,7,5,8],
    ],
];

/*
for ($i=0; $i < count($studenti) ; $i++) {
    $studente = $studenti[$i];
    var_dump($studente['name']);
    var_dump($studente['lastname']);

    $totaleVoti = 0;
    for ($j=0; $j < count($studente['voti']); $j++) {
        $voto = $studente['voti'][$j];
        $totaleVoti += $voto;
    };
    $mediaStudente = $totaleVoti / count($studente['voti']);
    var_dump($mediaStudente);
}
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 7</title>
</head>
<body>
    <h1>Snack 7</h1>
    <p>Creare un array contenente qualche alunno di un’ipotetica classe. Ogni alunno avrà Nome, Cognome e un array contenente i suoi voti scolastici. Stampare Nome, Cognome e la media dei voti di ogni alunno.</p>

    <?php for ($i=0; $i < count($studenti) ; $i++) {
    $studente = $studenti[$i];
    $totaleVoti = 0;
    for ($j=0; $j < count($studente['voti']); $j++) {
        $voto = $studente['voti'][$j];
        $totaleVoti += $voto;
    };
    $mediaStudente = $totaleVoti / count($studente['voti']); ?>
    
    <div>
        <h1>Studente <?php echo $i+1?></h1>
        <p>Name: <?php echo $studente['name']; ?></p>
        <p>Lastname: <?php echo $studente['lastname']; ?></p>
        <p>Average: <?php echo $mediaStudente; ?></p>
    </div>

<?php
} ?>


</body>
</html>