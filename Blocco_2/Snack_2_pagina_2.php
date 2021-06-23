<?php



$utente = $_GET['invitato'];


$lista_Utenti = ['Andrei','Marco'. 'Giuseppe' ];
var_dump($utente);

if (in_array($utente, $lista_Utenti)) {
    echo 'Benvenuto alla festa!';
} else {
    echo 'Non sei nella lista degli invitati!';
}

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
    
</body>
</html>