<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  <h1>Registration Form</h1>
  <form action="welcome.php" method="GET">
    <input type="text" name="firstname" placeholder="First Name" required>
    <input type="text" name="lastname" placeholder="Last Name" required>
    <input type="email" name="email" placeholder="Email" required>
    <select name="course">
      <option value=""> ----Select course----</option>
      <option value="DBIT">DBIT</option>
      <option value="DBA">DBA</option>
    </select>
    <input type="Submit" name="Register" value="Register">
  </form>


  </h1>
</body>
</html>