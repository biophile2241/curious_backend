<?php
$servername = "localhost";  // Change this to your MySQL server's hostname or IP address
$username = "root"; // Change this to your MySQL username
$password = ""; // Change this to your MySQL password
$database = "curious"; // Change this to the name of your MySQL database

// Create a connection
$con = mysqli_connect($servername, $username, $password, $database);

// Check connection
if ($con->connect_error) {
?>
    <script> alert("connecting error")</script>
  <?php
}
?>

