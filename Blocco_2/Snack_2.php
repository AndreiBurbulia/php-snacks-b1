

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Snack 2</h1>
    <p>Creiamo due pagine php. La prima farà una chiamata GET alla seconda attraverso un form. Il form avrà un input di testo in cui inserire il nome di un invitato. Inseriamo nell’altro file una lista di invitati. Se la nostra query è contenuta nella lista degli invitati stampare ok, altrimenti ko.</p>


    <form action="./Snack_2_pagina_2.php" method="get">
        <input type="text" name="invitato" id="invitato">
        <input type="submit" value="Invia">
    </form>
</body>
</html>