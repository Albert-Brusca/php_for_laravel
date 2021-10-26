<?php

require 'app/helpers.php';

require 'app/Task.php';

require 'config.php';

//$user = 'debian-sys-maint';
//$pass = 'vNlMOKJcn8fINrQ8';
//$dsn = 'mysql:host=localhost;dbname=phplaraveldevs';



$user = $config['database']['user'];
$pass = $config['database']['password'];
$type = $config['database']['databasetype'];
$host = $config['database']['host'];
$name = $config['database']['name'];
$dsn = "$type:host=$host;dbname=$name";

//connect -> API nom connect, sense parametres entrada i tornara objecte $dbh


try {
    $dbh = new PDO($dsn, $user, $pass);

} catch (\Exception $e) {
    echo 'Error de connexió a la base de dades';
}

$statement = $dbh->prepare('SELECT * FROM tasks;');

$statement->execute();

$tasks = $statement->fetchAll(PDO::FETCH_CLASS, 'Task');

$greeting = greet();
