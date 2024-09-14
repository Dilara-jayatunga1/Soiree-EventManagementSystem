<?php
session_start();
include("connect.php");
if($_SERVER['REQUEST_METHOD']=="POST"){
  // Retrieve the username and password from the POST request
  $username=$_POST['username'];
  $password=$_POST['password'];
  
// Check if username, password are not empty and username is not numeric
  if(!empty($username) && !empty($password) &&  !is_numeric($username))
  {
     //save database
     $sql="INSERT INTO  user_login (username,password) VALUES('$username','$password')";
  }
  if ($conn->query($sql) === TRUE) {
    echo "<script>alert('Added Successfully');</script>";
} else {
    echo "<script>alert('Unsuccessful');</script>";
}
}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css">
<title> CSS Login Screen Tutorial </title>
</head>
<body style="background-image: url('back.jpg');background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 800px;">
    <header class="header">
      <a href="#" class="logo"><span>S</span>oiree</a>

      <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="price.html">price</a>
        <a href="gallery.html">Gallery</a>
        <a href="about.html">About</a>
        <a href="booking.php">Book Party</a>
        <a href="help.html">Help</a>
        <a href="logg.php">Login</a>
        <a href="logout.php">Logout</a>
      </nav>
    

      <div id="menu-bars" class="fas fa-bars"></div>
    </header>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>SIGNUP</h3>
            <p>Please enter your credentials to signup.</p>
          </div>
        </div>
        <form class="login-form" action="signup.php" method="post">
          <input type="text" name="username" placeholder="username"/>
          <!--<input type="password" name="cpassword" placeholder=" create password"/>-->
          <input type="password" name="password" placeholder=" confirm password"/>
          <button>Signup</button>
          <p class="message">already have an account? <a href="logg.php">login</a></p>
        </form>
      </div>
    </div>
</body>
</html>