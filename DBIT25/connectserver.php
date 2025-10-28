<?php
//connect to the database
$servername = "localhost";
$username = "root";
$password = "";
// open  CONNECTION to server : mysqli_connect
$connect = mysqli_connect($servername,$username,$password);
if ($connect) {
    echo "Connected successfully";
} else {
    //echo "Connection failed: ";
    echo mysqli_error($connect);
}
$query = "CREATE DATABASE HELLO123";
$run_query = mysqli_query($connect,$query);

if ($run_query) {
    echo "<br>Database created successfully";
} else {
    echo "<br>Error creating database: " . mysqli_error($connect);
}

// close the connection
mysqli_close($connect);
?>