<?php
$servername = "localhost";
$username = "root"; // your username
$password = ""; //your password
$database = "csc";
// Getting values
$name=$_POST['name'];
$email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];
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
$query = "insert into contactform (name,email,subject,message) VALUES ('$name','$email','$subject','$message')";
//Execute the query
if ($conn->query($query) === TRUE) {
 echo "Your message has been sent. Thank you!";
} else {
 echo "Error: " . $conn->error;
}
$conn->close();
?>
