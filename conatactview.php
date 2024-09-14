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
        <h1>Contact Details</h1>
        <?php

        require 'connect.php';

        $result = $conn->query("SELECT * FROM contact");

        if ($result->num_rows > 0) {
            echo "<table border='1'>";
            echo "<tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Message</th>
            </tr>";

            while ($row = $result->fetch_assoc()) {
                echo "<tr>";
                echo "<td>" . $row['id'] . "</td>";
                echo "<td>" . $row['name'] . "</td>";
                echo "<td>" . $row['email'] . "</td>";
                echo "<td>" . $row['message'] . "</td>";
                echo "<td>";
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
