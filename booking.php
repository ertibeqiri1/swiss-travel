
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
    <link rel="stylesheet" href="booking.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
    <script  type="text/javascript"  src="booking.js"></script>
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
        <li><a href="index.html"><img class="logo" src="images/logo.jpg" alt=""></a></li>
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
<!-- PJESA E "Booking1" -->

<section class="homepage3">
    <div class="photo1">
        <img src="images/bookPH1.jpg" alt="">
        <h1 id="text1">Where do you want to explore? </h1>
        <p id="p1">
            The world is full of amazing places to see and experience. 
            <br> Whether it's a busy city or a quiet beach, your next adventure is waiting.

        </p>

    </div>

<br>

</section>

<!-- PJESA E "Booking Map" -->
<section class="Map">
<div class="photo2">
    <img src="images/bookingPH2.jpg" alt="">
    <h1 id="text1">Explore and Book Your Perfect Trip Today </h1>
    <p id="p1">Use our interactive Swiss Travel Discover Map to find out what's open for
           <br>travel and get details on any potential entry requirements.
        

    </p>



</div>
</section>

<!-- PJESA E "Cancel Flights" -->
<section class="calendar">
    <div class="photo3">
        <img src="images/calendarAirplane.jpg" alt="">
        <h1 id="text1">How Can I Cancel/Change My Flight?</h1>
        <p id="p1">To cancel or change a flight, check the airline's policies, 
        <br>manage your booking online, or contact customer service with your details.
        <br>Act quickly, as fees and options vary by ticket type.</p>
        
    </div>
</section>

<div class="h1">
  <h1>Some Dream Destinations</h1>
</div>  

<section class="destinacionet">
   <div class="d1">
     <a href="bern.php">
        <img src="images/bern.jpg" alt="Bern">
        <h4>Bern</h4>
     </a>
   </div>
 
   <div class="d1">
     <a href="NewYork.php">
        <img src="images/NewYork.jpg" alt=""> 
        <h4>New York</h4> 
     </a>
   </div>

    <div class="d1"> 
      <a href="paris.php">
       <img src="images/paris (1).jpg" alt=""> 
       <h4>Paris</h4> 
      </a> 
    </div>

   <div class="d1">
      <a href="rome.php"> 
        <img src="images/rome.jpg" alt="">
        <h4>Rome</h4>
      </a>
   </div>

   <div class="d1"> 
      <a href="sofia.php">
       <img src="images/sofia.jpg" alt="">
       <h4>Sofia</h4>
      </a> 
   </div>

   <div class="d1"> 
    <a href="madrid.php">
       <img src="images/Madrid.jpg" alt="">
       <h4>Madrid</h4>
    </a>
  </div>
</section>














<!-- PJESA E "Booking2" -->

<section class="BookNow">
    <div class="photo4">
        <img src="images/bookPH3.png" alt="">
        <h1 id="text1">All Around The World</h1>
        <button class="redirect1">Book now</button>
    </div>
</section>

<!-- PJESA E "Back to top" -->

<div class="top1">
    <a class="GoTop" href=""> Back to top<i class="fa-solid fa-arrow-up"></i> </a>
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
  <div class="social">
      


     <a href="https://www.facebook.com/Sw1ssTravel"> <i  class="fa-brands fa-facebook-f"></i></a>
     <a href="aboutUs.html"> <i class="fa-solid fa-phone"></i><a href=""></a>
     <a href="aboutUs.html"> <i class="fa-solid fa-envelope"></i></a>
   
   <a href="https://www.instagram.com/swiss__travel/?hl=en"> <i class="fa-brands fa-instagram"></i></a>
    
    
    <h4 class="privacy">Terms of Service Privacy Policy</h4>
  </div>


</section>    


</body>
</html>

