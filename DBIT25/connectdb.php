<?php
//connect to the database
$server = "localhost";
$user = "root";
$password = "";
$db = "dbitjuly";
// Create connection
$connectdb = mysqli_connect($server, $user, $password, $db);
if (!$connectdb) {
    die(mysqli_error($connectdb));
}

?>