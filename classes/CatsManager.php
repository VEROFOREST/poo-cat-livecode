<?php

class CatsManager
{
    private $pdo;

    public function __construct(PDO $pdo)
    {
        $this->pdo = $pdo;
    }

    public function all()
    {
        $catsStatement = $this->pdo->query('SELECT * FROM cats');

        $catsRow = $catsStatement->fetchAll();
        $cats = [];

        foreach($catsRow as $catRow) {
            $cats[] = new Cat($catRow);
        }

        return $cats;
    }

    public function get()
    {

    }

    public function create()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}