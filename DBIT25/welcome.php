<?php
//using post mehtod - $_POST
//var_dump($_POST);
if(isset($_POST["Register"])){
  $firstname = $_POST['firstname'];
  $lastname = $_POST['lastname'];
  $email = $_POST['email'];
  $course = $_POST['course'];
  echo "Welcome $firstname $lastname!<br>";
  echo "Your email is $email.<br>";
  echo "You have selected the course: $course.<br>";
  echo "";


}
//USING $_GET METHOD - $_GET
//CHECK IF THE FORM IS SUBMITTED
if(isset($_GET["Register"])){
  $firstname = $_GET['firstname'];
  $lastname = $_GET['lastname'];
  $email = $_GET['email'];
  $course = $_GET['course'];
  echo "Welcome $firstname $lastname!<br>";
  echo "Your email is $email.<br>";
  echo "You have selected the course: $course.<br>";
  echo "";

}
?>