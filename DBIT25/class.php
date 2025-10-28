
<?php
if (isset($_POST['Submit'])) {
    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $rating = $_POST['rating'];
    $comments = $_POST['comments'];

    echo "<h1>Thank you for your feedback, " . $fullname . "!</h1>";
    echo "<h2>Submitted Details:</h2>";
    echo "<table>";
    echo "<tr><th>Field</th><th>Value</th></tr>";
    echo "<tr><td>Full Name</td><td>" . $fullname . "</td></tr>";
    echo "<tr><td>Email</td><td>" . $email . "</td></tr>";
    echo "<tr><td>Rating</td><td>" . $rating . "</td></tr>";
    echo "<tr><td>Comments</td><td>" . ($comments) . "</td></tr>"; // nl2br preserves line breaks from the textarea
    echo "</table>";
}

?>
