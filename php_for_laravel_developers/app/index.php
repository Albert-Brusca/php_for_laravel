<?php

use Framework\App;
use Framework\Database\Database;

require 'app/helpers.php';

$tasks = App::get('database')->selectAll('tasks');

//$tasks = Database::selectAll('tasks');
$greeting = greet();
