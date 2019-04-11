<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'microproject');
define('DB_PASSWORD', 'microproject');
define('DB_NAME', 'microproject');

/* Attempt to connect to MySQL database */
$connection = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if (!$connection){
    echo "not connected";
}

