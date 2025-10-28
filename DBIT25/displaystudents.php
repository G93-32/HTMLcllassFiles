<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Display Students</title>
  <style>
    h1{text align: center;}
   table,th ,td border: 1px solid black;
    table {
      width: 100%;
      border-collapse: collapse;
    }
    th, td {
      padding: 8px;
      text-align: left;
      border-bottom: 1px solid #ddd;
    }
    th {
      background-color: #f2f2f2;
    }

  </style>
</head>
<body>
  <h1>Registered students</h1>
  <table>
    <tr>
      <th>Student ID</th>
      <th>Fullname</th>
      <th>Course</th>
      <th>Email</th>
      <th>Delete</th>
      <th>Update</th>
    </tr>
    <?php
    //connect to dbitjuly
    include "connectdb.php";
    //read/select operation
    $query = "SELECT * FROM students";
    //perform
   $run_query  = mysqli_query($connectdb, $query);
   if ($run_query) {
 //fetcch
 while($student= mysqli_fetch_assoc($run_query))
 {
  $StudentID = $student["StudentID"];
  $Fullname = $student["Fullname"];
  $Email = $student["Email"];
  $Course = $student["Course"];
  echo "<tr>
          <td>$StudentID</td>
          <td>$Fullname</td>
          <td>$Course</td>
          <td>$Email</td>
          <td><a href='Delete.php?DeleteID=$StudentID'>Delete</a></td>
          <td><a href='Update.php?UpdateID=$StudentID'>Update</a></td>
        </tr>";
 }
   }else {
    die(mysqli_error($connectdb));
   }
    ?>
  </table>

</body>
</html>