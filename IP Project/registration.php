<?php
 include "connection.php";
 include('../navbar.php');
  ?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>Student registration</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <style type="text/css">
        section
        {
         margin-top: -20px;
        }
     </style>
     </head>
 <body>
 
 
 <!--
     <nav class="navbar navbar-inverse">
         <div class="container-fluid">
           <div class="navbar-header">
         <a class="navbar-brand active" >LIBRARY MANAGEMENT SYSTEM</a>
            </div>
              <ul class="nav navbar-nav">
                 <li><a href="index.html">HOME</a></li>
                 <li><a href="books.html">BOOKS</a></li>
                 <li><a href="">FEEDBACK</a></li>
                 </ul>
                 <ul class="nav navbar-nav navbar-right">
                 <li><a href="student-login.html"><span class="glyphicon glyphicon-log-in"> STUDENT-LOGIN</span></a></li>
                 <li><a href="registration.html"><span class="glyphicon glyphicon-log-out">LOGOUT</a></li>
                 <li><a href="registration.html"><span class="glyphicon glyphicon-user"> SIGN UP</a></li>
 
             </ul>
 
             </div>
         </nav>
    -->                                                                                                   
<section>
    <div class="Reg-img">
        <br> 
     <div class="box2">
        <h1 style="text-align: center;font-size: 27px;font-family: lucida console;">
            &nbsp Library Management System</h1>
        <h1 style="text-align: center;font-size: 20px;">User Registration form</h1>
        <form name="Registration" action="" method="post">
            
            <div class="Login">
            <input class="form-control" type="text" name="First name" placeholder="First name" required=""><br>
            <input class="form-control" type="text" name="Last name" placeholder="Last name" required=""><br>
            <input class="form-control" type="text" name="username" placeholder="username" required=""><br>
            <input class="form-control" type="password" name="password" placeholder="password" required=""><br>
            <input class="form-control" type="text" name="roll" placeholder="Roll No" required=""><br>
            <input class="form-control" type="text" name="email" placeholder="Email" required=""><br>
            <input class="form-control" type="text" name="contact" placeholder="Phone No" required=""><br>

            <input class="btn btn-default" type="submit" name="submit" value="Sign Up" style="color:#a73e3e;width: 70px;height: 30px;"/div>

    
        </form>

     </div>
    </div>
    </section>

    <?php
if (isset($_POST['submit'])) {
    // Ensure $db is your mysqli connection
    $first_name = mysqli_real_escape_string($db, $_POST['First_name']);
    $last_name = mysqli_real_escape_string($db, $_POST['Last_name']);
    $username = mysqli_real_escape_string($db, $_POST['username']);
    $password = mysqli_real_escape_string($db, $_POST['password']);
    $roll = mysqli_real_escape_string($db, $_POST['roll']);
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $contact = mysqli_real_escape_string($db, $_POST['contact']);

    // Construct the SQL query
    $query = "INSERT INTO STUDENT (first_name, last_name, username, password, roll, email, contact) 
              VALUES ('$first_name', '$last_name', '$username', '$password', '$roll', '$email', '$contact')";

    // Execute the query
    mysqli_query($db, $query) or die(mysqli_error($db));
}
?>
