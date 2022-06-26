<?php

/* Maak de connection string voor MySQL */

$host = 'localhost';
/* De $dbname moet je wel elk keer veranderen naar de naam van je database of anders gaat connect je naar een andere datbase */
$dbname = 'boekenwinkel';

$username = 'root';

$password = '';

/* Maak de database connectie */
$connectStr = 'mysql:host=' . $host . ';dbname=' . $dbname . ';charset=utf8';
$db = new PDO($connectStr, $username, $password);



$db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
