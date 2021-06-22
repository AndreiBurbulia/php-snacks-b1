<?php
$posts = [

    '10/01/2019' => [
        [
            'title' => 'Titolo del Post 1',
            'author' => 'Autore del Post',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Titolo del Post 2',
            'author' => 'Autore del Post',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Titolo del Post 3',
            'author' => 'Autore del Post',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Titolo del Post 4',
            'author' => 'Autore del Post',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Titolo del Post 5',
            'author' => 'Autore del Post',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Titolo del Post 6',
            'author' => 'Autore del Post',
            'text' => 'Testo post 6'
        ]
    ],
];

$keys = array_keys($posts);
//var_dump($keys);

/*
for ($i=0; $i < count($keys); $i++) {
    $key = $keys[$i];
    for ($j=0; $j < count($key); $j++) {
        $day = $posts[$key];
        //var_dump($day);
        for ($h=0; $h < count($day); $h++) {
            $post = $day[$h];
            var_dump($post['title']);
            var_dump($post['author']);
            var_dump($post['text']);
        }
    };
};
*/
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 3</title>
</head>
<body>
    <h1>Snack 3</h1>
    <p>Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.</p>

    <?php for ($i=0; $i < count($keys); $i++) { //ciclo in base alla chiave cioe alla data
    $key = $keys[$i]; ?>

        <h2><?php echo $key; ?></h2>


    <?php for ($j=0; $j < count($key); $j++) { //ciclo ai post di quel giorno
        $day = $posts[$key];
        //var_dump($day);
        for ($h=0; $h < count($day); $h++) { //ciclo dentro ogni post
            $post = $day[$h]; ?>

    <div class="post">
        <p> <?php echo $post['title']; ?> </p>
        <p> <?php echo $post['author']; ?> </p>
        <p> <?php echo $post['text']; ?> </p>
    </div>

    <br><br><br>

    <?php
        }
    };
};
     ?>


    
</body>
</html>