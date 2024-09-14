<?php
session_start();
?>
<!DOCTYPE html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Sample Form</title>
  <link rel="stylesheet" href="admin.css" >
  <style>
    .card button {
  background-color: #9c7a7a;
}
    </style>
</head>

<body style="background-image: url('back.jpg');background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 200px;">
    <header class="header">
      <a href="#" class="logo"><span>S</span>oiree</a>

      <nav class="navbar">
      <a href="adminindex.php">Admin pannel</a>
        <!--<a href="../price/price.html">price</a>
        <a href="../gallery/gallery.html">Gallery</a>
        <a href="../about page/about.html">About</a>
        <a href="../booking/booking.html">Book Party</a>
        <a href="#contact">contact</a>
        <a href="../login page/Help.html">Help</a>
        <a href="../login page/login.html">Login</a>-->
        <a href="logout.php">Logout</a>
      </nav>
</header>
<!--<?php echo $_SESSION["username"];?>-->
<div class="cards">
  <section id="view-users" class="card">
      <img src="baloon.webp" alt="Current Users">
      <h2><br>View Current Users</h2>
      <a href="view.php"><button>User List</button></a>
  </section>

  <section id="add-user" class="card">
      <img src="baloon.webp" alt="Current Users">
      <h2><br>Add New User</h2>
      <a href="adduser.php"><button>Add User</button></a>
  </section>

  
  <section id="view-booking" class="card">
      <img src="baloon.webp" alt="Current Users">
      <h2><br>View Bookings</h2>
      <a href="viewpackage.php"><button>View</button></a>
  </section>

<section id="delete-user" class="card">
      <img src="baloon.webp" alt="Current Users">
      <h2><br>Contact Us</h2>
      <a href="conatactview.php"><button>Contacts</button></a>
  </section>
</div></body>
</html>