<?php         
$servername = "localhost";         
$username = "root";         
$password = "";         
$dbname = "harish";         
$conn = new mysqli($servername, $username, $password, $dbname);            
if ($conn->connect_error) {             
    die("Connection failed: " . $conn->connect_error);         
    }                 
$un = $_REQUEST['username'];         
$email = $_REQUEST['email'];         
$password = $_REQUEST['password'];
$stmt = "INSERT INTO signup VALUES ('$un','$email','$password')";         
$result = mysqli_query($conn,$stmt) or die(mysqli_error());
echo "<script>" . "window.location.href='../UR/login.html'" . "</script>";
$conn->close();
?>