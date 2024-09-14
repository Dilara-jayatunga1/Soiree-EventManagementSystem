
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "party1db";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed:" . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieving form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO contact (`name`, `email`, `message`)
    VALUES ('$name', '$email', '$message')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Added Successfully');</script>";
    } else {
        echo "<script>alert('Unsuccessful');</script>";
    }
}

?>
