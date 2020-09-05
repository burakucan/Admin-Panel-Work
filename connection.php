<?php

$conn=mysqli_connect("localhost","root","","login");

if(!$conn)
{
 echo "Connection is not Successfull \n";

}

?>
<!-- 
// $servername = "localhost";
// $database = "login";
// $username = "root";
// $password = "";

// // Create connection

// $conn = mysqli_connect("localhost","root","","login");

// // Check connection

// if ($conn->connect_error) {
// die("Connection failed: " . $conn->connect_error);
// }

// echo 'Connected successfully';

// mysqli_close($conn);

// ?> -->