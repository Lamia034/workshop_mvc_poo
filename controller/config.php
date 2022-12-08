<?php 
$server = "localhost";
$user = "root";
$pass = "";
$database = "brief5";

$conn = mysqli_connect($server, $user, $pass, $database);

if (!$conn) {
    die("<script>alert('Connection Failed.')</script>");
}

?>