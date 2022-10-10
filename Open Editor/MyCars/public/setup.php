<?php

$dsn = 'sqlite:./cars.sqlite';
$pdo = new PDO($dsn, null, null, [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

//var_export($pdo);

$sql = "
CREATE TABLE cars (
    id INT,
    name TEXT(50) NOT NULL,
    release TEXT NOT NULL
);
";

echo $pdo->exec($sql);
