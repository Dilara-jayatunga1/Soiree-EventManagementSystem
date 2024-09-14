<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!--<link rel="stylesheet" href="footer.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    <title>Event Organisers | Soiree</title>

    <!-- css-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

    <!--font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css" />

    <!--css file-->
    <link rel="stylesheet" href="styles.css" />
    

    <style>
        .container {
            width: 80%;
            margin: 20px auto;
            background-color: rgba(220, 195, 195, 0.9);
            padding: 20px;
            border-radius: 7px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            font-size: 15px;
        }
        input[type="text"], textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #ba8e8e;
            color: #fff;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }
        input[type="submit"]:hover {
            background-color:#e1c5c5;
        }
        .contact-info {
           margin-top: 20px;
        
}
        .contact-info p {
            margin-bottom:0 20px;
        }
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

<body style="background-image: url('images/contact.jpg');background-size: cover; background-position: center; background-repeat: no-repeat; margin-top: 200px;">
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

    <section class="pricing-area section-padding30 fix">
        <div class="container">
               <center><h2>Contact Us</h2></center>
                <form action="cview.php" method="post">
                    <label for="name">Your Name:</label>
                    <input type="text" id="name" name="name" required>
        
                    <label for="email">Your Email:</label>
                    <input type="text" id="email" name="email" required>
        
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="2" required></textarea>
        
                    <center><input type="submit" value="Submit"></center>
                </form>
        
                <div class="contact-info">
                    <!--<h3>Contact Information:</h3>-->
                    <p><i class="fas fa-map-marker-alt"></i><strong>Address:</strong> 380/12,Reid Avenue, Colombo, Sri Lanka</p><br>
            <p><i class="fas fa-envelope"></i><strong>Email:</strong> Soiree@gmail.com</p><br>
            <p><i class="fas fa-phone"></i><strong>Contact:</strong> +9452147896531</p>
        </div>
    </div>
</body>
</html>

        


            </div>
        </div>
    </section>

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