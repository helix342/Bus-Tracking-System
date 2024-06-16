<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "harish";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$email = $_REQUEST['email'];
$stmt = "SELECT pass FROM signup WHERE email = '$email'";
$result = mysqli_query($conn,$stmt);
$num_row = mysqli_num_rows($result);
if ($num_row==1) {
    echo "<script>alert('Your password:12345');</script>";
    echo "<script>" . "window.location.href='../UR/forgot.html'" . "</script>";
} 
else {
    echo "<script>alert('Invalid email. Please try again.');</script>";
    echo "<script>" . "window.location.href='../UR/forgot.php'" . "</script>";
}
$conn->close();
?>