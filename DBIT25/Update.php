<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Update Student</h1>
  <?php
  //connect to the database
  include 'connectdb.php';
  $UpdateID = $_GET["UpdateID"];
  $query = "SELECT * FROM students WHERE StudentID=$UpdateID";
  $run_query = mysqli_query($connectdb, $query);
  if ($run_query) {
    $student = mysqli_fetch_assoc($run_query);
    $Fullname = $student["Fullname"];
    $Email = $student["Email"];
    $Course = $student["Course"];
  } else {
    die(mysqli_error($connectdb));
  }
  ?>
  <form  method="post" >
    <input type="text" name="Fullname" placeholder="Fullname" required value="<?php echo $Fullname; ?>">
    <input type="email" name="Email" placeholder="Email" required value="<?php echo $Email; ?>">
    <select name="Course" >
      <option value=""><?php echo $Course; ?></option>
      <option value="DBIT">DBIT</option>
      <option value="DBA">DBA</option>
      <option value="Repeat">Repeat</option>
    </select>
    <input type="Submit" name="Register" value="Update">
  </form>
<?php
//update operation
//connect to the database
include 'connectdb.php';
//check if form is submitted
if($_SERVER['REQUEST_METHOD'] == 'POST'){
  //collect form data
  $Fullname = $_POST['Fullname'];
  $Email = $_POST['Email'];
  $Course = $_POST['Course'];
  //insert data into database
  $query = "UPDATE students SET Fullname='$Fullname', Email='$Email', Course='$Course' WHERE StudentID=$UpdateID";
//perfrom query
$run_query = mysqli_query($connectdb, $query);
//check if query was successful
if($run_query){
    echo "<h1>Update Successful</h1>";
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