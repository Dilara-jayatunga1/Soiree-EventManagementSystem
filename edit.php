
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="../img/logo.ico" type="image/x-icon">
    <link rel="stylesheet" href="admin.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Admin Dashboard</title>
</head>
            <ul>
                <li><h1><a href="adminindex.html">Administrator Panel</a></h1></li>
                <li><button><a href="../index.html">View Homepage</a></li></button>
                
            </ul>
        </div>
    </nav>
    <style>
     input[type="text"], input[type="password"], select {
            width: 99%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
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

    <div class="container">
      
    <form name="" action="" method="POST">
        <h1>Update User Details </h1>
        
        <br>
        <label for="username">Enter User Name:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label>User Type:</label>
        <input type="text" id="usertype" name="usertype" required>
        <br>
        <button type="submit">Update</button>
    </form>
    
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $usertype = $_POST['usertype'];

    require 'connect.php';

    // Fetch the user details from the database
    $stmt = $conn->prepare("SELECT * FROM user_login WHERE username=?");
    $stmt->bind_param("s", $username);
    $stmt->execute();
    $result = $stmt->get_result();
    $user = $result->fetch_assoc();

    if ($user) {
        // Update the user details
        $stmt = $conn->prepare("UPDATE user_login SET email=?, utype=? WHERE username=?");
        $stmt->bind_param("sss", $usertype, $username);

        if ($stmt->execute()) {
            echo "Record updated successfully.";
        } else {
            echo "Error updating record: " . $stmt->error;
        }

        $stmt->close();
        $conn->close();
    } else {
        echo "User not found.";
    }
}
?>

    </div>
</body>
</html>
