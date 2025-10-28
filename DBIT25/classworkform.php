<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Form</title>
</head>
<body>
  <h1>Feedback Form</h1>
  <form action="class.php" method="POST">
    <input type="text" name="fullname" placeholder="Full name" required>
    <input type="email" name="email" placeholder="Email" required>
    <select name="rating">
      <option value=""> ---- Rate----</option>
      <option value="Excellent">Excellent</option>
      <option value="Good">Good</option>
      <option value="Average">Average</option>
      <option value="Poor">Poor</option>
    </select>
    <textarea name="comments" placeholder="Comments"></textarea>
    <input type="Submit" name="Submit" value="Submit">
  </form>
</body>
</html>