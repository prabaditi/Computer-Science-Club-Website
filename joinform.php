<?php
$servername = "localhost";
$username = "root"; // your username
$password = ""; //your password
$database = "csc";
// Getting values
$name=$_POST['name'];
$id=$_POST['id'];
$email=$_POST['email'];
// Create connection
$conn = new mysqli($servername, $username, $password, $database);
// Check connection
if ($conn->connect_error) {
 die("Connection failed: " . $conn->connect_error);
}
else {
 echo "";
}
//construct the query
$query = "insert into joined_students (name,id,email) VALUES ('$name','$id','$email')";
//Execute the query
if ($conn->query($query) === TRUE) {
 echo "Your request to join CSC has been received. Thank you!";
} else {
 echo "Error: " . $conn->error;
}
$conn->close();
?>
