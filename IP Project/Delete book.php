<?php
include "connection.php"; // Include your database connection
include('../navbar.php'); // Include your navigation bar

// Test database connection
if ($db) {
    echo "Connected to the database successfully.<br>";
} else {
    die("Database connection failed: " . mysqli_connect_error());
}

// Check if the delete request has been made
if (isset($_POST['delete'])) {
    $book_title = mysqli_real_escape_string($db, $_POST['book_title']);

    // Construct the SQL delete query
    $query = "DELETE FROM book WHERE title = '$book_title'";

    // Execute the query and check for success
    if (mysqli_query($db, $query)) {
        echo "<div class='alert alert-success'>Book with title <strong>$book_title</strong> deleted successfully!</div>";
    } else {
        echo "<div class='alert alert-danger'>Error: " . mysqli_error($db) . "</div>";
    }
}

// Fetch all books to display in a table
$query = "SELECT * FROM book";
$result = mysqli_query($db, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($db));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Delete Book</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<section>
    <div class="Del-img">
        <br>
        <div class="box4">
            <h1 style="text-align: center;font-size: 20px;">Delete Book</h1>
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Author</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) : ?>
                        <tr>
                            <td><?php echo $row['title']; ?></td>
                            <td><?php echo $row['author']; ?></td>
                            <td>
                                <form action="" method="post" style="display:inline;">
                                    <input type="hidden" name="book_title" value="<?php echo $row['title']; ?>">
                                    <input class="btn btn-danger" type="submit" name="delete" value="Delete">
                                </form>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>
