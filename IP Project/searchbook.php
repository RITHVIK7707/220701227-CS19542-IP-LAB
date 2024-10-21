<?php
include "connection.php"; // Include your database connection
include('../navbar.php'); // Include your navigation bar

// Check if the search request has been made
$searchQuery = "";
if (isset($_POST['search'])) {
    $searchTerm = mysqli_real_escape_string($db, $_POST['search_term']);
    $searchQuery = "WHERE title LIKE '%$searchTerm%' OR author LIKE '%$searchTerm%'";
}

// Fetch books based on the search query
$query = "SELECT * FROM book $searchQuery";
$result = mysqli_query($db, $query);

if (!$result) {
    die("Query failed: " . mysqli_error($db));
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Search Book</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>
<section>
    <div class="Sea-img">
        <br>
        <div class="box5">
            <h1 style="text-align: center;font-size: 27px;font-family: lucida console;">Library Management System</h1>
            
            <h1 style="text-align: center;font-size: 20px;">Search Book</h1>
            <form action="" method="post" style="text-align: center;">
                <input type="text" name="search_term" placeholder="Enter Title or Author" required>
                <input class="btn btn-primary" type="submit" name="search" value="Search">
            </form>

            <table class="table table-bordered" style="margin-top: 20px;">
                <thead>
                    <tr>
                        <!-- Adjust column names as per your database table -->
                        <th>Publisher</th> <!-- Adjusted from 'ID' to 'Book ID' -->
                        <th>Title</th>
                        <th>Author</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if (mysqli_num_rows($result) > 0): ?>
                        <?php while ($row = mysqli_fetch_assoc($result)): ?>
                            <tr>
                                <!-- Replace 'id' with the actual column name, such as 'book_id' -->
                                <td><?php echo $row['publisher']; ?></td> <!-- Replace 'book_id' with the actual column if different -->
                                <td><?php echo $row['title']; ?></td>
                                <td><?php echo $row['author']; ?></td>
                            </tr>
                        <?php endwhile; ?>
                    <?php else: ?>
                        <tr>
                            <td colspan="3" style="text-align: center;">No books found.</td>
                        </tr>
                    <?php endif; ?>
                </tbody>
            </table>
        </div>
    </div>
</section>
</body>
</html>
