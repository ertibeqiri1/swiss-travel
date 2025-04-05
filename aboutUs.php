<?php
session_start();

if (isset($_SESSION['welcome_message'])) {
    echo "<script>alert('" . $_SESSION['welcome_message'] . "');</script>";
    unset($_SESSION['welcome_message']); // Remove message after showing it once
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiss Travel</title>
    <link rel="stylesheet" href="aboutUs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>
<!-- PJESA E "NAVBAR" -->
   
<div class="name">
        <p >Swiss Travel</p>
        </div>
  
  <nav>
    <ul class="sidebar">
        <li onclick="hideSidebar()"><a href="#"><i class="fa-solid fa-x"></i></a></li>
        <li><a href="offers.php">Offers</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="contactus/contactUs.php">Contact Us</a></li>

        <?php if (isset($_SESSION['email'])): ?>
            <!-- Show Logout button when logged in -->
            <li><a href="logini/logout.php"><button type="button" class="button">Logout</button></a></li>
        <?php else: ?>
            <!-- Show Login/Signup button when NOT logged in -->
            <li><a href="logini/login.php"><button type="button" class="button">Login/Signup</button></a></li>
        <?php endif; ?>
    </ul>

    <ul class="bar">
        <li><a href="index.php"><img class="logo" src="images/logo.jpg" alt=""></a></li>
        <li class="hideOnMobile"><a href="offers.php">Offers</a></li>
        <li class="hideOnMobile"><a href="booking.php">Booking</a></li>
        <li class="hideOnMobile"><a href="aboutUs.php">About Us</a></li>
        <li class="hideOnMobile"><a href="contactus/contactUs.php">Contact Us</a></li>

        <?php if (isset($_SESSION['email'])): ?>
            <li class="hideOnMobile"><a href="logini/logout.php"><button type="button" class="button">Logout</button></a></li>
        <?php else: ?>
            <li class="hideOnMobile"><a href="logini/login.php"><button type="button" class="button">Login/Signup</button></a></li>
        <?php endif; ?>

        <li class="menu-button" onclick="showSidebar()"><a href="#"><i class="fa-solid fa-bars"></i></a></li>
    </ul>
</nav>
    <!-- PJESA E "About us" -->


    <div class="section">
        <div class="container">
            <div class="content-section">
                <div class="title">
                    <h1>About us</h1>
                 </div>
                 <div class="content">
                    <h3>Welcome to Swiss Travel</h3>
                     <p>Welcome to Swiss Travel, our company was founded on 24/02/2022 and our goal is to fulfill the requests 
                        of customers in a regular way so that they have a comfortable trip and unforgettable holidays.
                        We are dedicated to creating unforgettable journeys, whether you're looking for a relaxing getaway,
                        an adventurous escape, or a chance to explore new cultures. Our friendly and experienced team works
                        closely with you to plan every detail, ensuring a seamless and stress-free experience from start to finish. 
                        With a passion for travel and a commitment to personalized service, we aim to make every trip special
                        and filled with memories to cherish forever. Let us guide you on your next adventure and show you the world
                        in a way you'll never forget.</p>
                        <div class="button">
                            <a href="contactus/contactUs.php">Read More</a>
                     </div>
                </div>
                <div class="social">
                    <a href="https://www.facebook.com/Sw1ssTravel"> <i  class="fa-brands fa-facebook-f"></i></a>
                    <a href="contactus/contactUs.php"> <i class="fa-solid fa-phone"></i></a>
                    <a href="contactus/contactUs.php"> <i class="fa-solid fa-envelope"></i></a>
                    <a href="https://www.instagram.com/swiss__travel/?hl=en"> <i class="fa-brands fa-instagram"></i></a>             
               </div>
            </div>
            <div class="foto1">
                 <img src="images/SwissTravel2.jpg" alt=""> 
                </div>
        </div>
    </div>
    <!-- PJESA E "Partnership" -->

      <div class="h1">
        <h1 id="H">Our Partnerships</h1>
      </div>

      <div class="logot">
        <div class="logo1"> <img src="images/Delta_Air_Lines-Logo.wine7.png" alt=""></div>
        <div class="logo2"> <img src="images/americanLogo.png" alt=""></div>
        <div class="logo3"> <img src="images/Wizz_Air-Logo.wine.png" alt=""></div>
        <div class="logo4"> <img src="images/Swiss_International_Air_Lines_logo.png" alt=""></div>
      </div>


    <!-- PJESA E "Footerit" -->
    <section class="footer">
      <div class="links">
        <a  id="ab"  href="aboutUs.html">About</a>
        <a id="of" href="offers.html">Offers</a>
        <a id="boo" href="booking.html">Booking</a>
        <a id="cu" href="contactus/contactUs.php">Contact-Us</a>

      
        
      </div>
      <hr>
      <div class="onlinestore">
        <h2>ONLINE STORE</h2>
        <p>Sell Online</p>
        <p>Features</p>
        <p>Examples</p>
        <p>Website Builder</p>
        <p>Online retail</p>
  
      </div>
      <div class="website">
        <p>Ecommerce website</p>
        <p>Domain names</p>
        <p>Themes</p>
        <p>Shopping cart</p>
        <p>Ecommerce hosting</p>
      </div>
      <div class="commerce">
        <p>Mobile software</p>
        <p>Online store builder</p>
        <p>Dropshiping business</p>
        <p>Store themes</p>
      </div>
      <div class="point">
        <h2>POINT OF SALE</h2>
        <p>Point of sale</p>
        <p>Features</p>
        <p>Hardware</p>
      </div>
      <div class="helpcenter">
        <h2>SUPPORT</h2>
        <p>24/7 support</p>
        <p>Swiss Travel Help Center</p>
        <p>Travel Community</p>
        <p>API documentation</p>
        <p>Free tools</p>
        <p>Free stock photos</p>
        <p>Website for sale</p>
        <p>Logo maker</p>
        <p>Business name generator</p>
        <p>Research</p>
        <p>Legal</p>
      </div>
      <div class="main">
        <h2>Swiss Travel</h2>
        <p>Contact</p>
        <p>Partner program</p>
        <p>Affiliate program</p>
        <p>App developers</p>
        <p>Investors</p>
        <p>Blog Topic</p>
        <p>Community Events</p>
        <p>Business Encyclopedia</p>
      </div>
      
  <br>
  <br>
  <br>
  <br>
  <hr>
      <div class="social2">
          
  
  
         <a href="https://www.facebook.com/Sw1ssTravel"> <i  class="fa-brands fa-facebook-f"></i></a>
         <a href="aboutUs.html"> <i class="fa-solid fa-phone"></i><a href=""></a>
         <a href="aboutUs.html"> <i class="fa-solid fa-envelope"></i></a>
       
       <a href="https://www.instagram.com/swiss__travel/?hl=en"> <i class="fa-brands fa-instagram"></i></a>
        
        
        <h4 class="privacy">Terms of Service Privacy Policy</h4>
      </div>
  
  
    </section>    



</body>
</html>