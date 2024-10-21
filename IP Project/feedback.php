<?php
include "connection.php"; // Include your database connection
include('../navbar.php'); // Include your navigation bar

// Check if the form has been submitted
if (isset($_POST['submit_feedback'])) {
    // Sanitize user input
    $name = mysqli_real_escape_string($db, $_POST['name']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $message = mysqli_real_escape_string($db, $_POST['message']);

    // Validate required fields
    if (!empty($name) && !empty($email) && !empty($message)) {
        // Insert feedback into the database
        $query = "INSERT INTO feedback (name, email, message) VALUES ('$name', '$email', '$message')";

        if (mysqli_query($db, $query)) {
            echo "<div class='alert alert-success'>Thank you for your feedback!</div>";
        } else {
            echo "<div class='alert alert-danger'>Error: " . mysqli_error($db) . "</div>";
        }
    } else {
        echo "<div class='alert alert-danger'>Please fill out all fields.</div>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Feedback</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <style>
      body{
        overflow:hidden;
      }
      </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<section>
    <div class="feedback-section">
        <br>
        <div class="box-feedback">
            <h1 style="text-align: center;font-size: 20px;">Submit Your Feedback</h1>

            <form action="feedback.php" method="post" style="text-align: center;">
                <div class="form-group">
                    <label for="name">Name:</label>
                    <input type="text" name="name" class="form-control" placeholder="Enter your name" required>
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" name="email" class="form-control" placeholder="Enter your email" required>
                </div>
                <div class="form-group">
                    <label for="message">Message:</label>
                    <textarea name="message" class="form-control" rows="4" placeholder="Enter your feedback" required></textarea>
                </div>
                <input class="btn btn-primary" type="submit" name="submit_feedback" value="Submit Feedback">
            </form>
        </div>
    </div>
</section>
</body>
</html>

