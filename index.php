
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--<link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    <title>Event Organisers | Soiree</title>

    <link
      rel="stylesheet"
      href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css"
    />

    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
    />

    <link rel="stylesheet" href="dstyles.css" />
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

  <body  style="background-image: url('back.jpg');">
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
<?php echo $_SESSION["username"]?>
    <section class="home" id="home">
      <div class="content">
        <h3 class="hcontent">
          C r a f t i n g &nbsp; M e m o r i e s <br />
          B e y o n d &nbsp; E x p e c t a t i o n s <br />
          <span> Soiree events </span>
        </h3>
        <a href="booking.php" class="btn">Book Now</a>
      </div>

      <div class="swiper-container home-slider">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="images/ge.webp" />
          </div>
          <div class="swiper-slide">
            <img src="images/1.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="images/6.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="images/ri.jpg" />
          </div>
          <div class="swiper-slide">
            <img src="images/pe.jpg" />
          </div>

          <div class="swiper-slide">
            <img src="images/1.avif" />
          </div>
        </div>
      </div>
    </section>

    <!-- theme toggler  -->
    <div class="theme-toggler">
      <div class="toggle-btn">
        <i class="fas fa-cog"></i>
      </div>
    </div>
  
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

    <!--JS file-->
    <script src="home.js"></script>
    <!--footer-->
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
       </footer>
 
</html>
