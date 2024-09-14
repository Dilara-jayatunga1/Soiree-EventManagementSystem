<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin</title>
    <style>
  .body-background {
  background-image: url("back.jpg");
  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
  padding-top: 120px; /* Adjust padding-top instead of margin-top to create space for the fixed header */
}
     input[type="text"], input[type="email"], input[type="password"], select {
            width: 99%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin: 0 5px 0 0; 
        }
    
    label {
        display: block;
        margin-top: 5px;
        margin-bottom: 1px;
        font-size: 20px;
    }

    button {
            background-color: #2d42a8;
            color: #fff;
            padding: 10px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            margin-top: 8px; 
        }

        button:hover {
            background-color: #45a049;
        }
        .container{
            width: 40%;
        }

        input[type="radio"] {
            margin: 0 5px 0 0; 
        }
        .radio{
            display: inline;
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
        <div class="container">
      
    <form name="" action="adduser.php" method="post">
        <h1>Add New User </h1>
        
        <br>
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>

        <br>
        <label for="password">Password</label>
        <input type="password" id="password" name="password" required>
        <br>
        
        <label>User Type:</label>
        <input type="text" id="usertype" name="usertype" required>
        <br>
        <button type="submit">Add user</button>
    </form>
    <?php

include('connect.php');
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if(isset($_POST['username'])) {
        


    $username = $_POST['username'];
    $password = $_POST['password'];
    $usertype =  $_POST['usertype'];
    
    $check_username = mysqli_query($conn, "SELECT * FROM user_login WHERE username = '$username'");
    if (mysqli_num_rows($check_username) > 0) {
        echo "This username is already taken!";  
      } else {

    $sql = "INSERT INTO user_login (username, password,usertype) VALUES ('$username', '$password', '$usertype')";
    if (mysqli_query($conn, $sql)) {
      echo "New record created successfully";

    } else {
      echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
    }
}
}
    ?>

    </div>
</body>
</html>

