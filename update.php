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
      
    <form name="" action="" method="post">
        <h1>Update User </h1>
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
        <button type="submit">Update</button>
    </form>
    <?php
        session_start(); 
        include('connect.php');
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_GET['id'])) {
            $id = $_GET['id'];
            $username = mysqli_real_escape_string($conn, $_POST['username']);
            $password = mysqli_real_escape_string($conn, $_POST['password']);
            $usertype = mysqli_real_escape_string($conn, $_POST['usertype']);

            // Prepare and bind the SQL statement
            $sql = "UPDATE `user_login` SET username=?, password=?, usertype=? WHERE id=?";
            $stmt = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmt, "sssi", $username, $password, $usertype, $id);

            // Execute the statement
            if (mysqli_stmt_execute($stmt)) {
                echo "Updated successfully";
            } else {
                echo "Error updating record: " . mysqli_error($conn);
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        }
        ?>
</div>
</body>
</html>

