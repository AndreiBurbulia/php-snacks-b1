<?php
$db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Rossi'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Bianchi'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
    ];


for ($i=0; $i < count($db['teachers']); $i++) {
    $teacher = $db['teachers'][$i];
    var_dump($teacher['name']);
    var_dump($teacher['lastname']);
};

for ($i=0; $i < count($db['pm']); $i++) {
    $student = $db['pm'][$i];
    var_dump($student['name']);
    var_dump($student['lastname']);
};

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 6</title>

    <style>
    .grey{
        background-color: grey;
        border-radius: 1rem;
        padding: 1rem;
        margin: 1rem;
    }
    .green{
        background-color: green;
        border-radius: 1rem;
        padding: 1rem;
        margin: 1rem;
    }
    </style>
</head>
<body>
    <h1>Snack 6</h1>
    <p>Stampiamo il nostro array mettendo gli insegnanti in un rettangolo grigio e i PM in un rettangolo verde.</p>

    <h1>Teachers</h1>
    <?php for ($i=0; $i < count($db['teachers']); $i++) {
    $teacher = $db['teachers'][$i]; ?>
    <div class="grey">
        <p>Name: <?php echo $teacher['name']; ?> </p>
        <p>Lastname:  <?php echo $teacher['lastname']; ?> </p>
    </div>
    <?php
}; ?>


<h1>Student</h1>
    <?php for ($i=0; $i < count($db['pm']); $i++) {
        $student = $db['pm'][$i]; ?>
    <div class="green">
        <p>Name: <?php echo $student['name']; ?> </p>
        <p>Lastname:  <?php echo $student['lastname']; ?> </p>
    </div>
    <?php
    }; ?>

    
</body>
</html>