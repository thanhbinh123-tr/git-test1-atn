<?php

define('DB_SERVER', 'ec2-34-231-56-78.compute-1.amazonaws.com');
define('DB_USERNAME', 'wntouiijiufzob');
define('DB_PASSWORD', '2434b69858057a5af5cd0fb7f60e14dc1805781aa7fdb3f5aef9664558d4f396');
define('DB_NAME', 'd80vlrcun6bto1');
 
/* Attempt to connect to PostgreSQL database */
$conn = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
or die('Could not connect1: ' . pg_last_error());

?>
