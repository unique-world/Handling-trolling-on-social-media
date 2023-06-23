<?php

$host = "localhost"; // Hostname
$database = "twitterDB"; // Database name
$username = "root"; // Database username
$password = ""; // Database password

// Create a connection
$connection = mysqli_connect($host, $username, $password, $database);
echo "Connection is created successfully thank you for connecting us";

// Check connection
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}

// Set the table name
$tableName = "tweet";

?>
