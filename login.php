<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harish";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_REQUEST['username'];
$password = $_REQUEST['password'];
$stmt = "SELECT * FROM signup WHERE email = '$email' AND pass = '$password'";
$result = mysqli_query($conn,$stmt);
$num_row = mysqli_num_rows($result);
if ($num_row==1) {
    echo "<script>" . "window.location.href='../UR/index.html'" . "</script>";
} 
else {
    echo "<script>alert('Invalid email or password. Please try again.');</script>";
    echo "<script>" . "window.location.href='../UR/login.html'" . "</script>";
}
$conn->close();
?>