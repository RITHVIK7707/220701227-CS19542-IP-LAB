<?php
include "connection.php"; // Include your database connection
include('../navbar.php'); // Include your navigation bar
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Add Book</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <style>
        section {
            margin-top: -20px;
        }
    </style>
</head>
<body>
<section>
    <div class="Ins-img">
        <br>
        <div class="box3">
            <h1 style="text-align: center;font-size: 27px;font-family: lucida console;">&nbsp Library Management System</h1>
            <h1 style="text-align: center;font-size: 20px;">Add Book</h1>
            <form name="AddBook" action="" method="post">
                <div class="Login">
                    <input class="form-control" type="text" name="title" placeholder="Book Title" required=""><br>
                    <input class="form-control" type="text" name="author" placeholder="Author" required=""><br>
                    <input class="form-control" type="text" name="isbn" placeholder="ISBN" required=""><br>
                    <input class="form-control" type="text" name="publisher" placeholder="Publisher" required=""><br>
                    <input class="form-control" type="text" name="year" placeholder="Publication Year" required=""><br>
                    <input class="form-control" type="text" name="copies" placeholder="Number of Copies" required=""><br>
                    <input class="btn btn-default" type="submit" name="submit" value="Add Book" style="color:#a73e3e;width: 70px;height: 30px;">
                </div>
            </form>
        </div>
    </div>
</section>

<?php
if (isset($_POST['submit'])) {
    // Sanitize user input
    $title = mysqli_real_escape_string($db, $_POST['title']);
    $author = mysqli_real_escape_string($db, $_POST['author']);
    $isbn = mysqli_real_escape_string($db, $_POST['isbn']);
    $publisher = mysqli_real_escape_string($db, $_POST['publisher']);
    $year = mysqli_real_escape_string($db, $_POST['year']);
    $copies = mysqli_real_escape_string($db, $_POST['copies']);

    // Construct the SQL query
    $query = "INSERT INTO book(title, author, isbn, publisher, year, copies) 
              VALUES ('$title', '$author', '$isbn', '$publisher', '$year', '$copies')";

   // Execute the query
   mysqli_query($db, $query) or die(mysqli_error($db));
}
?>

</body>
</html>
