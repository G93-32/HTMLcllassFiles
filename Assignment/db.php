<?php
$server = "localhost";
$user = "root";
$password = "";
$db = "wanderlust";

$connect = mysqli_connect($server, $user, $password, $db);

if (!$connect) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
