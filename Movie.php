<?php

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
