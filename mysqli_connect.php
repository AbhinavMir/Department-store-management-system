<?php
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'root');
define('DB_PASSWORD', '');
define('DB_NAME', 'store');

/* Attempt to connect to MySQL database */
$dbc = mysqli_connect(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
$link=$dbc;
// Check connection
if($dbc === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
