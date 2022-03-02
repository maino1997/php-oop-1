<?php

include __DIR__ . '/./data.php';


include __DIR__ . '/./Movie.php';



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

    <?php foreach ($movies as $movie) :
        $my_movie = new Movie($movie['title'], $movie['author'], $movie['year'], $movie['cast_list']); ?>

        <h2><?php echo $my_movie->title ?></h2>
        <h3><?php echo $my_movie->author ?></h3>
        <h4><?php echo $my_movie->year ?></h4>
        <ul>

            <?php $my_movie->getCast($movie['cast_list']) ?>

        </ul>

    <?php endforeach; ?>


</body>

</html>