<?php
# Create a php server with: php -S localhost:8888
$query = require 'bootstrap.php';


$tasks = $query->selectAll('todos');


require 'index-view.php';
