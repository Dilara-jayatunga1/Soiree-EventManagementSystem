<html>
<!DOCTYPE html>
<head>
<link rel="stylesheet" href="style.css">
<title> login </title>
</head>
<body style="background-image: url('back.jpg');background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 200px;"></body>
  <header class="header">
    <a href="#" class="logo"><span>S</span>oiree</a>

    <nav class="navbar">
    <a href="index.php">Home</a>
        <a href="gallery.html">Gallery</a>
        <a href="about.html">About</a>
        <a href="booking.php">Book Party</a>
        <a href="payment.html">payment</a>
        <a href="help.html">Help</a>
        <a href="logg.php">Login</a>
        <a href="logout.php">Logout</a>
      </nav>
    <div id="menu-bars" class="fas fa-bars"></div>
  </header>

      <div id="menu-bars" class="fas fa-bars"></div>
    </header>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3>LOGIN</h3>
            <p>Please enter your credentials to login.</p>
          </div>
        </div>
        <form class="login-form" action=" " method="POST">
          <div>
            <label>Username</label>
            <input type="text"  name="username" placeholder="username" required>
          </div>
          <div>
            <label>password</label>
            <input type="password" name="password" placeholder="password" required>
          </div>
           
           <button>login</button>
          <p class="message">Not registered? <a href="signup.php">Create an account</a></p>
        </form>
        <?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "party1db";

session_start();
// Create a new MySQLi object for database connection
$conn = new mysqli($servername, $username, $password ,$dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
// Check if the current request method is POST
if($_SERVER["REQUEST_METHOD"]=="POST")
{
   $username=$_POST["username"];
   $password=$_POST["password"];

   //select user data based on the provided username and password
   $sql = "SELECT * FROM user_login WHERE username = '".$username."' AND password = '".$password."'";
   $result = mysqli_query($conn, $sql);

   if ($result->num_rows > 0) {
    $user_data = $result->fetch_assoc();
    if ($user_data['usertype'] == 'user') {
      $_SESSION["login"] = "user";

        header("Location:index.php");

        
    } elseif ($user_data['usertype'] == 'admin') {
      $_SESSION["login"] = "admin";
        header("Location:adminindex.php");
    }
    exit();
  }
   if (!$result) {
       // Error handling if query fails
       echo "Error: " . mysqli_error($conn);
   } else {
       $row = mysqli_fetch_array($result);
   
       if (!$row) {
           // No rows returned, handle accordingly
           echo "No matching user found.";
       } else {
           // Rows returned, proceed with checking user type
           if ($row["usertype"] == "user") {
               $_SESSION["username"] = $row["username"];
               header("location: index.php");
               exit; // Terminate script after redirection
           } elseif ($row["usertype"] == "admin") {
               $_SESSION["username"] = $row["username"];
               header("location: adminindex.php");
               exit; // Terminate script after redirection
           }
       }
   }
  }

?>

      </div>
    </div>
</body>
</html>