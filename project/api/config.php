<?php

//database setting
$dbHost = 'localhost';
$dbUser = 'root';
$dbPass = '';
$dbName = 'sofea';

// Create connection
$dbc = new mysqli($dbHost, $dbUser, $dbPass, $dbName);
// Check connection
if ($dbc->connect_error) {
    die("Connection failed: " . $dbc->connect_error);
} 

?>