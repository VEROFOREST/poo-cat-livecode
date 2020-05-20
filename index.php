<?php

include('config/autoload.php');

$pdo = new PDO(
    'mysql:dbname=sql2341954;host=sql2.freemysqlhosting.net',
    'sql2341954',
    'jN2!qH6!',
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
);

$catsManager = new CatsManager($pdo);

$cats = $catsManager->all();

foreach($cats as $cat) {
    $cat->meow();
    $cat->eat('croquettes');
    $cat->sleep();

    echo "<br>";
}


echo "<br>";
echo Cat::$count. " chats instanciés\n";