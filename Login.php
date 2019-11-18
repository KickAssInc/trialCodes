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
     
     $sql = "SELECT * FROM signuptable WHERE username='" . $username . "'";

	$result = $conn->query($sql);
	$count  = mysqli_num_rows($result);
	if($count==0) {
		echo "User not found!";
	} else {
		$row = $result->fetch_assoc();
		if($row["password"]==$password)		
		echo "You are successfully authenticated!";
		else
			echo "Invalid Password!";
		
	}

$conn->close();
?>
