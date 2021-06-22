<?php
$paragrafo = 'Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, autem eaque debitis at rem suscipit delectus, quos vel similique ratione dicta nisi praesentium amet possimus doloribus magnam. Dicta sit, minus, repellat rerum optio quis magnam dolorum voluptatibus at consequuntur est doloremque esse facilis, accusamus nisi eum? Optio ad, ipsam ab id iure quis facilis asperiores adipisci cumque aspernatur temporibus? Voluptas totam animi perspiciatis assumenda accusamus laudantium sequi reprehenderit iste, odio fugit corrupti, cupiditate officiis nam. Adipisci nam unde suscipit nulla assumenda quos perspiciatis, excepturi, sed ex, maiores earum. Minima nostrum, ipsum a cupiditate hic nulla consectetur tempore numquam facilis consequuntur et rem qui expedita explicabo placeat velit iusto reprehenderit fugiat delectus doloribus corrupti. Quibusdam facere earum, minima est obcaecati dolorum accusantium, similique consectetur ducimus nobis perspiciatis aliquid soluta sit. Enim neque eaque temporibus, quaerat quam officia facilis deleniti at, repudiandae sed quos veritatis recusandae, laudantium similique doloribus molestias mollitia odit fugiat eligendi in a. Laudantium esse provident accusamus alias officia tenetur, facilis sapiente placeat quo autem impedit velit quae veritatis perspiciatis beatae distinctio aliquid sunt soluta a? Asperiores, adipisci quibusdam soluta dicta iste aut earum, ipsam fugit error consectetur magni expedita cumque minus. Iusto sed sunt sapiente sint assumenda facilis quas doloremque quisquam, aliquam modi voluptate dolores tempore recusandae commodi totam dolorum dolor placeat ipsam provident reprehenderit a mollitia veniam cum? Et natus fuga velit id. Laudantium voluptates repellat ullam asperiores suscipit non quibusdam recusandae quae architecto eos eaque officiis natus cum quidem excepturi voluptas adipisci hic est, nesciunt cumque, nobis optio error tempora? Possimus, sed laudantium! Commodi, aspernatur consequuntur nobis repellendus ex officiis, qui accusantium ad, quas laborum vitae? Placeat ut cumque voluptatibus perferendis quas illo soluta, aspernatur, omnis quos recusandae commodi dicta fugit quo accusantium sit voluptatem assumenda esse qui eveniet voluptates repellendus tempora tenetur. Dolorem, recusandae nisi!';

$paragrafo_diviso = explode('.', $paragrafo);
var_dump($paragrafo_diviso);


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Snack 5</title>
</head>
<body>
    <h1>Snack 5</h1>
    <p>Prendere un paragrafo abbastanza lungo, contenente diverse frasi. Prendere il paragrafo e suddividerlo in tanti paragrafi. Ogni punto un nuovo paragrafo.</p>

    <h2>Paragrafo intero</h2>
    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Fuga, autem eaque debitis at rem suscipit delectus, quos vel similique ratione dicta nisi praesentium amet possimus doloribus magnam. Dicta sit, minus, repellat rerum optio quis magnam dolorum voluptatibus at consequuntur est doloremque esse facilis, accusamus nisi eum? Optio ad, ipsam ab id iure quis facilis asperiores adipisci cumque aspernatur temporibus? Voluptas totam animi perspiciatis assumenda accusamus laudantium sequi reprehenderit iste, odio fugit corrupti, cupiditate officiis nam. Adipisci nam unde suscipit nulla assumenda quos perspiciatis, excepturi, sed ex, maiores earum. Minima nostrum, ipsum a cupiditate hic nulla consectetur tempore numquam facilis consequuntur et rem qui expedita explicabo placeat velit iusto reprehenderit fugiat delectus doloribus corrupti. Quibusdam facere earum, minima est obcaecati dolorum accusantium, similique consectetur ducimus nobis perspiciatis aliquid soluta sit. Enim neque eaque temporibus, quaerat quam officia facilis deleniti at, repudiandae sed quos veritatis recusandae, laudantium similique doloribus molestias mollitia odit fugiat eligendi in a. Laudantium esse provident accusamus alias officia tenetur, facilis sapiente placeat quo autem impedit velit quae veritatis perspiciatis beatae distinctio aliquid sunt soluta a? Asperiores, adipisci quibusdam soluta dicta iste aut earum, ipsam fugit error consectetur magni expedita cumque minus. Iusto sed sunt sapiente sint assumenda facilis quas doloremque quisquam, aliquam modi voluptate dolores tempore recusandae commodi totam dolorum dolor placeat ipsam provident reprehenderit a mollitia veniam cum? Et natus fuga velit id. Laudantium voluptates repellat ullam asperiores suscipit non quibusdam recusandae quae architecto eos eaque officiis natus cum quidem excepturi voluptas adipisci hic est, nesciunt cumque, nobis optio error tempora? Possimus, sed laudantium! Commodi, aspernatur consequuntur nobis repellendus ex officiis, qui accusantium ad, quas laborum vitae? Placeat ut cumque voluptatibus perferendis quas illo soluta, aspernatur, omnis quos recusandae commodi dicta fugit quo accusantium sit voluptatem assumenda esse qui eveniet voluptates repellendus tempora tenetur. Dolorem, recusandae nisi!</p>
    
    
    
    <h2>Paragrafo diviso</h2>
    <?php for ($i=0; $i <count($paragrafo_diviso) ; $i++) { ?>

    <p> <?php echo $paragrafo_diviso[$i] ?> .</p>
<?php } ?>
</body>
</html>