<?php
$dbHost = 'localhost'; // usually localhost
$dbUsername = 'root';
$dbPassword = 'cnc390cnc';
$dbDatabase = 'locations';

$mysql = new mysqli($dbHost, $dbUsername, $dbPassword, $dbDatabase) or die("Error connecting.<br />File: ".__FILE__);
?>
