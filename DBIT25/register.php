<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Registration Form</h1>
  <form  method="post" >
    <input type="text" name="Fullname" placeholder="Fullname" required>
    <input type="email" name="Email" placeholder="Email" required>
    <select name="Course">
      <option value=""> ----Select course----</option>
      <option value="DBIT">DBIT</option>
      <option value="DBA">DBA</option>
      <option value="Repeat">Repeat</option>
    </select>
    <input type="Submit" name="Register" value="Register">
  </form>
<?php
//insert/create operation
//connect to the database
include 'connectdb.php';
//check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //collect form data
  $Fullname = $_POST['Fullname'];
  $Email = $_POST['Email'];
  $Course = $_POST['Course'];
  //insert data into database
  $query = "INSERT INTO students (Fullname, Email, Course) VALUES ('$Fullname', '$Email', '$Course')";
//perfrom query
$run_query = mysqli_query($connectdb, $query);
//check if query was successful
if($run_query){
    echo "<h1>Registration Successful</h1>";
  } else {
    echo "<h1>Error in Registration</h1>";
  }
} else {
  echo "<h1>Please fill the form to register</h1>";
}



 ?>

  </h1>
</body>
</html>