<?php
session_start();
if (!isset($_SESSION['login'])) {
    header('Location:logg.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <!--<link rel="stylesheet" href="footer.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
          integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>-->
    <title>Event Organisers | Soiree</title>

    <!-- css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"/>

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"/>

    <!--css file-->
    <link rel="stylesheet" href="dstyles.css"/>
    <style>
    footer {
  text-align: center;
  padding: 3px;
  background-color: #ba8e8e;
  color: white;
}
.footerContainer{
    width: 100%;
    padding: 70px 30px 20px;
}
.socialIcons{
    display: flex;
    justify-content: center;
}
.socialIcons a{
    text-decoration: none;
    padding: 10px;
    background-color:#FFFFFF;
    margin: 10px;
    border-radius: 50%;
}

.socialIcons a i{
    font-size: 2em;
    color: #ba8e8e;
    opacity: 0.9;    
}

.socialIcons a:hover{
    background-color: #111;
    transition: 0.5s;
}

.socialIcons a:hover i{
    color: #FFFFFF;
    transition: 0.5s;
}

.footerBottom{
    background-color: #d7bdbd;
    padding: 20px;
    text-align: center;
}

.footerBottom p{
    color: #FFFFFF;
}

.designer{
   opacity: 0.7;
   text-transform: uppercase; 
   letter-spacing: 1px;
   font-weight: 400;
   margin: 0px 5px; 
}
</style>
</head>

<body class="body-background">
<!-- header section starts  -->
<header class="header">
    <a href="#" class="logo"><span>S</span>oiree</a>
    <nav class="navbar">
        <a href="index.php">Home</a>
        <a href="gallery.html">Gallery</a>
        <a href="aboutt.html">About</a>
        <a href="booking.php">Book Party</a>
        <a href="payment.html">payment</a>
        <a href="contact.php">Contact</a>
        <a href="help.html">Help</a>
        <a href="logg.php">Login</a>
        <a href="logout.php">Logout</a>
    </nav>

    <div id="menu-bars" class="fas fa-bars"></div>
</header>

<form class="booking-form" method="post" action="book.php">

    <div class="form-group">
        <label for="booking-date">Booking Date:</label>
        <input type="date" id="booking-date" name="booking-date" required/>
    </div>

    <div class="form-group">
        <label for="event-type">Event Type:</label>
        <select id="event-type" name="event-type" required>
            <option value="" disabled selected>Select Event Type</option>
            <option value="birthday">Birthday Party</option>
            <option value="graduation">Graduation Party</option>
            <option value="wedding">Wedding</option>
            <option value="Gardenparty">Garden Party</option>
            <option value="Dinnerparty">Dinner Party</option>
            <option value="gettogether">Get Together</option>
        </select>
    </div>
    <div class="form-group">
        <label for="participation-count">Participation Count:</label>
        <input
                type="number"
                id="participation-count"
                name="participation-count"
                min="1"
                required
        />
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <textarea
                id="name"
                name="name"
                rows="1"
        ></textarea>
    </div>
    <div class="form-group">
        <label for="special-request">Special Request:</label>
        <textarea
                id="special-request"
                name="special-request"
                rows="4"
        ></textarea>
    </div>
    
    <div class="form-group">
    <button type="submit" name="submit" >Submit</button>
    <button type="submit" name="submit" ><a href="payment.html">payment</a></button>
    </div>
</form>


</body>
<footer>
<div class="footerContainer">
    <div class="socialIcons">
        <a href=""><i class="fa-brands fa-facebook"></i></a>
        <a href=""><i class="fa-brands fa-instagram"></i></a>
        <a href=""><i class="fa-brands fa-twitter"></i></a>
        <a href=""><i class="fa-brands fa-youtube"></i></a>
    </div>
</div>
<div class="footerBottom">
    <p>Copyright &copy;2022; Designed by <span class="designer">Nethsilu</span></p>
</div>
</footer>
</html>
