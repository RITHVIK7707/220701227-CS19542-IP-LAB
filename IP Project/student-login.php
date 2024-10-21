<?php include('../navbar.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>

    <title>Student Login</title>
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
                <li><a href="index.php">HOME</a></li>
                <li><a href="books.php">BOOKS</a></li>
                <li><a href="">FEEDBACK</a></li>
                </ul>
                <ul class="nav navbar-nav navbar-right">
                <li><a href="student-login.php"><span class="glyphicon glyphicon-log-in"> STUDENT-LOGIN</span></a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-log-out">LOGOUT</a></li>
                <li><a href="registration.php"><span class="glyphicon glyphicon-user"> SIGN UP</a></li>

            </ul>

            </div>
        </nav> -->
<section>
<div class="log-img">
 <br>  <br> <br>
 <div class="box1">
    <h1 style="text-align: center;font-size: 35px;font-family: lucida console;">
        Library Management System</h1><br>
    <h1 style="text-align: center;font-size: 25px;">User Login form</h1>
    <form name="Login" action="" method="">
        
        <div class="Login">
        <input class="form-control" type="text" name="username" placeholder="username" required=""><br>
        <input class="form-control" type="password" name="password" placeholder="password" required=""><br>
        <input class="btn btn-default" type="submit" name="submit" value="Login" style="color:#a73e3e;width: 70px;height: 30px;"/div>


    <p style="color: white;">
        <br><br>
        <a style="color: white;" href="">Forgot password?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp 
        New to this website?<a style="color: white;" href="registration.html">Sign Up</a>
    </p>
</form>
 </div>
</div>
</section>
</body>
</html>