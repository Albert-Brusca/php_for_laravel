<?php

use Framework\Database\Database;

require 'config.php';

require 'app/helpers.php';

require 'app/Models/Task.php';

require 'framework/Database/Database.php';

require 'framework/Database/Connection.php';

$database = new Database($config);
$tasks = $database -> selectAll('tasks');

//$tasks = Database::selectAll('tasks');
$greeting = greet();
