<?php
$servername = "localhost";
$username = "root";
$password = "p@ssw0rd";
$dbname = "mydb";

// Create Connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check Connection
if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}
echo "Connected Sucessfully"."\n";

?>
