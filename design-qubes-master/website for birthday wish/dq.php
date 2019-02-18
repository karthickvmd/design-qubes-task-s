
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "cube";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

   $name = $_POST['Email'];
   $pass = $_POST['pass'];
$sql = "INSERT INTO dq (sno,date)
VALUES ('03','2019-03-25')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>