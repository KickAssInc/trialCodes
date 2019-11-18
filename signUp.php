<?php
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "ToDo";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

	 $username = $_POST['uname'];
     $password = $_POST['pass'];
     //$c_password =$_POST['confirmPassword'];
     
$sql = "INSERT INTO signuptable (username, password)
VALUES ('$username','$password')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>