<?php
// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "database";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Get username and password from form
$uname = $_POST['uname'];
$psw = $_POST['psw'];

// Query the database for the username and password
$sql = "SELECT * FROM users WHERE Username='$uname' AND Password='$psw'";
$result = mysqli_query($conn, $sql);

// If a row is returned, the login is successful
if (mysqli_num_rows($result) > 0) {
  echo "Login successful!";
} else {
   echo '<script>alert("Invalid username or password")</script>';
}

mysqli_close($conn);
?>
