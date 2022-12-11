<?php

require_once __DIR__ . "/Movie.php";


$movie = new Movie("pandora", "storico", "2012");

$movie2 = new Movie("robertone", "azione", "2000");

$movies = [$movie, $movie2];

var_dump($movies);

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
    <section>
        <h2>Movies</h2>
        <?php foreach ($movies as $element) { ?>

            <h4> Nome: <?php echo $element->nome ?></h4>
            <p> Genere: <?php echo $element->genere ?></p>
            <p> Anno-uscita: <?php echo $element->anno ?></p>

        <?php } ?>

    </section>

</body>

</html>