<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myproject";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO `studentdb`(`Name`, `EmailId`, `username`, `password`, `department`) VALUES ('{$_POST['Name']}','{$_POST['EmailId']}','{$_POST['username']}','{$_POST['password']}','{$_POST['department']}')";

if ($conn->query($sql) === TRUE) {
    header('location: index.php');  
} else {
    header('location: index.php');  
}

$conn->close();
?>