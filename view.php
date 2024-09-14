<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "party1db";

session_start();

$conn = new mysqli($servername, $username, $password ,$dbname);


if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="user.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Dashboard</title>
    <style>
  .body-background {
  background-image: url("back.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding-top: 600px; /* Adjust padding-top instead of margin-top to create space for the fixed header */
}
</style>
</head>
<body class="body-background">

<header class="header">
      <a href="#" class="logo"><span>S</span>oiree</a>

      <nav class="navbar">
        <a href="adminindex.php">Admin pannel</a>
      </nav>
</header>
<body>
    <div class="container">
        <h1>User Details</h1>
        <?php

        require 'connect.php';

        $result = $conn->query("SELECT * FROM user_login");

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>
            <th>ID</th>
            <th>User Name</th>
            <th>password</th>
            <th>User Type</th>
            <th>Operation</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['usertype'] . "</td>";
                echo "<td>";
                echo "<a href='update.php?id=" . $row['id'] . "'>Update</a>";
                echo"  ";
                echo"  ";
                echo"  ";
                echo "<a href='delete.php?id=" . $row['id'] . "'>Delete</a>";
                echo "</tr>";
            }

            echo "</table>";
        } else {
            echo "No records found.";
        }

        $conn->close();
    ?>
    
    </div>

</body>

</html>
