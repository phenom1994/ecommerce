<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "db_template";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $db_template);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
