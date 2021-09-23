<?php
$servername = "localhost";
$username = "example_user";
$password = "SHEEr@z786";
$dbname = "example_database";
$table = "self_survey";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

$fname= $_POST['fname'];
$lname= $_POST['lname'];
$position=$_POST['position'];
$department=$_POST['department'];
$skills= implode(",",$_POST['skills']);

$sql = "INSERT INTO $table (first_name, last_name, position,Departmant,Skills)
VALUES ('$fname', '$lname', '$position','$department','$skills')";

if ($conn->query($sql) === TRUE) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();



?>