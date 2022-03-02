<?php

include __DIR__ . '/./data.php';

$movies = [
    [
        'title' => 'Mamma ho perso l\'aereo',
        'author' => 'Walt Disney Picture',
        'year' => '1990',
        'cast_list' => [
            'firstperson',
            'secondperson',
            'thirdperson'
        ],
    ],
    [
        'title' => 'Matrix',
        'author' => 'Warner Bros Pictures',
        'year' => '1999',
        'cast_list' => [
            'pers1',
            'pers2',
            'pers3'
        ]
    ]
];

include __DIR__ . '/./data.php';


class Movie
{

    public $title;
    public $author;
    public $year;

    public function __construct($title, $author, $year, $cast_list)
    {
        $this->title = $title;
        $this->author = $author;
        $this->year = $year;
        $this->cast_list = $cast_list;
    }

    public function  getCast($cast_list)
    {
        foreach ($cast_list as $cast_person) {
            echo $cast_person;
        }
    }
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

    <?php foreach ($movies as $movie) :
        $my_movie = new Movie($movie['title'], $movie['author'], $movie['year'], $movie['cast_list']); ?>

        <h2><?php echo $my_movie->title ?></h2>
        <h3><?php echo $my_movie->author ?></h3>
        <h4><?php echo $my_movie->year ?></h4>
        <ul>
            <li>
                <?php $my_movie->getCast($movie['cast_list']) ?>
            </li>
        </ul>

    <?php endforeach; ?>


</body>

</html>