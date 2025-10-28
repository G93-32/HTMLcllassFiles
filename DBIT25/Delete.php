<?php
//delete operation
//pick deleteid from url
include "connectdb.php";

$DeleteID= $_GET["DeleteID"];
//write query to delete
$query = "DELETE FROM students WHERE StudentID=$DeleteID";
//fetch
$run_query = mysqli_query($connectdb, $query);
if ($run_query) {
  header("location:displaystudents.php");

}else{
  die(mysqli_error($connectdb));
}
?>