<?php


// client connection to database

$username = 'root';
$password = '';
$host = 'localhost';
$port = '3306';
$dbname = 'allegro';

// create connection
$conn = new mysqli($host, $username, $password, $dbname);


// check connection
if ($conn -> connect_error) {
    echo '<p>Connection failed: ' . $conn->connect_error . '</p>';
}

echo '<p>Connected successfully</p>';





?>