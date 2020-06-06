<?php

define('DB_SERVER', 'ec2-184-73-209-230.compute-1.amazonaws.com');
define('DB_USERNAME', 'mtycxjjccxmeee');
define('DB_PASSWORD', 'f0dd25aaa62a3a7a83d3934915c681f6ddfac747814e5a3668945ea34017c6ce');
define('DB_NAME', 'd35915da8p1v65');
 
/* Attempt to connect to PostgreSQL database */
$link = pg_connect("host=".DB_SERVER." dbname=". DB_NAME ." user=" . DB_USERNAME . " password=" .DB_PASSWORD. "")
		or die('Could not connect1: ' . pg_last_error());
?>
