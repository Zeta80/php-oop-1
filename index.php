<?php

require_once __DIR__ . "/Movie.php";


$movie = new Movie("pandora", "storico", "2012");

$movie = new Movie("robertone", "azione", "2000");


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
        <h2>Movie</h2>
        <p>Nome: <?php echo $movie->nome; ?></p>
        <p>Anno: <?php echo $movie->anno; ?></p>

    </section>

</body>

</html>