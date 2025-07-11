<?php

$host = "localhost";
$username = "root";
$password = "";
$database = "mirrorfashion";

// Create connection
$con = mysqli_connect($host, $username, $password, $database);

// Check if connection was successfull
if (!$con) {
    die("Connection Failed: " . mysqli_connect_error());
}

