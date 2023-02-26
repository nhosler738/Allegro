<?php


$username = 'root';
$password = 'root';
$host = 'localhost';
$port = '3306';

// create connection
$conn = new mysqli($host, $username, $password);


// check connection
if ($conn -> connect_error) {
    echo '<p>Connection failed: ' . $conn->connect_error . '</p>';
}

echo '<p>Connected successfully</p>';


?>