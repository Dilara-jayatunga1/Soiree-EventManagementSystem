
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
    $booking_date = $_POST['booking-date'];
    $event_type = $_POST['event-type'];
    $participation_count = $_POST['participation-count'];
    $name = $_POST['name'];
    $special_request = $_POST['special-request'];

    // Prepare and bind the SQL statement
    $sql = "INSERT INTO bookings (`booking-date`, `event-type`, `participation-count`, `name`, `special-request`)
    VALUES ('$booking_date', '$event_type', '$participation_count', '$name', '$special_request')";

    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Added Successfully');</script>";
    } else {
        echo "<script>alert('Unsuccessful');</script>";
    }
}

?>
