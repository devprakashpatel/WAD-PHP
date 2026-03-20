<?php
echo "Write a PHP script to demonstrate Database Connectivity using MySQL. Establish a connection between PHP and MySQL server and display a successful connection message.
<br>";
echo "Name : Dev patel <br>";
echo "Enrollment Number : 24082291019 <br>";
echo "------------------------------------------<br><br>";

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "test";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

$conn->close();
?>