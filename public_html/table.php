<?php
$servername = "localhost";
$username = "id16492945_mohzak";
$password = "[~ER3xP2~OX#<MP+";
$dbname = "id16492945_sparrowdata";
$conn = mysqli_connect($servername, $username, $password,$dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// sql to create table
$sql = "CREATE TABLE logins (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
fname TEXT(100) NOT NULL,
lname TEXT(100) NOT NULL,
reg_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table Loginsk created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>