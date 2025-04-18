
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
    <link rel="stylesheet" href="offers.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
   
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
        <!-- Logout  -->
        <li><a href="logini/logout.php"><button type="button" class="button">Logout</button></a></li>
    <?php else: ?>
        <!-- Login -->
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
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <li class="hideOnMobile"><a href="logini/admin_page.php">Dashboard</button></a></li>
            <?php endif; ?>
            <li class="hideOnMobile"><a href="logini/logout.php"><button type="button" class="button">Logout</button></a></li>
        <?php else: ?>
            <li class="hideOnMobile"><a href="logini/login.php"><button type="button" class="button">Login/Signup</button></a></li>
        <?php endif; ?>

        <li class="menu-button" onclick="showSidebar()"><a href="#"><i class="fa-solid fa-bars"></i></a></li>
    </ul>
</nav>

  
  <!-- PJESA E Sliderit -->
  </div>
    <div class="header">
        <h1>Some Of Our Trending  Offers</h1>
    </div>
    
    <section class="slider">
        
        <div class="slides">
          <img class="slide" src="images/offer4.png" alt="Image 1">
          <img class="slide" src="images/offer2.jpg" alt="Image 2">
          <img class="slide" src="images/offer3.png" alt="Image 3">
          <img class="slide" src="images/offer1.png" alt="Image 3">
          <img class="slide" src="images/offer5.png" alt="Image 3">
          
        </div>
        <button class="prev" onclick="prevSlide()">&#10094</button>
        <button class="next" onclick="nextSlide()">&#10095</button>
      </section>

        <br>

        
<!-- PJESA E "Oferta 1" -->
            <section class="homepage2">
                <div class="photo1">
                    <img src="images/offersPH1.jpg" alt="">
                    <h1 id="text1">Travel Tour </h1>
                    <h1 id="text2">"Around the World in 30 Days: The Ultimate Travel Adventure Awaits You!"</h1>
                    <p id="p1">
                        <br>
                        Do you dream of waking up in a new country every few days, surrounded by stunning landscapes, rich cultures, and unforgettable experiences?
                       <br> This is your chance to turn that dream into reality! Embark on the adventure of a lifetime with our exclusive <i>Around-the-World Travel Package.</i> 
                        <br>Explore breathtaking destinations, immerse yourself in diverse cultures, and create memories that will last forever.
                         
                        
            
                    </p>
                </div>  
            
            </section>
            <!-- PJESA E "Oferta 2" -->

            <section class="features">
                <h1>Travel to U.S.A </h1>
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="feature-box">
                                <div class="feature-img">
                                    <img id="LA" src="images/1.jpg">
                                    <div class="price">
                                        <p>870$</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                       
        
                                    </div>
                                </div>
                                <div class="feature-details">
                                    <h4>Los Angeles</h4>
                                    <p>LA offers sunshine almost year-round, making it the ideal destination for outdoor lovers. Stroll along iconic beaches like Santa Monica and Venice, or hike to breathtaking views at Griffith Park and Runyon Canyon.</p>
                                    <div>
                                        <span><i class="fa-solid fa-location-check"></i>Los Angeles</span>
                                        <span><i class="fa-solid fa-sun-bright"></i>4 Days</span>
                                        <span><i class="fa-solid fa-moon"></i>3 Nights</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box1">
                                <div class="feature-img">
                                    <img id="NYC" src="images/2.jpg">
                                    <div class="price">
                                        <p>820$</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half"></i>
        
                                    </div>
                                </div>
                                <div class="feature-details">
                                    <h4>New York</h4>
                                    <p>Stand in awe at the base of the Statue of Liberty, walk across  <br>the historic Brooklyn Bridge, or take in breathtaking views from <br> the top of the Empire State Building or One World Observatory. <br> NYC’s landmarks are calling!</p>
                                    <div>
                                        <span><i class="fa-solid fa-location-check"></i>New York</span>
                                        <span><i class="fa-solid fa-sun-bright"></i>4 Days</span>
                                        <span><i class="fa-solid fa-moon"></i>3 Nights</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="feature-box2">
                                <div class="feature-img">
                                    <img id="Chicago" src="images/3.jpg">
                                    <div class="price">
                                        <p>780$</p>
                                    </div>
                                    <div class="rating">
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star"></i>
                                        <i class="fa-solid fa-star-half"></i>
        
                                    </div>
                                </div>
                                <div class="feature-details">
                                    <h4>Chicago</h4>
                                    <p>Chicago in stunning views from the Skydeck Chicago at Willis Tower or the 360 CHICAGO Observation Deck at the John Hancock Center. Marvel at the architectural brilliance of The Bean (Cloud Gate) in Millennium Park.</p>
                                    <div>
                                        <span><i class="fa-solid fa-location-check"></i>Chicago</span>
                                        <span><i class="fa-solid fa-sun-bright"></i>4 Days</span>
                                        <span><i class="fa-solid fa-moon"></i>3 Nights</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- PJESA E "Oferta 3" -->


            <section>
                <div class="text3">
                    <h1>Travel with a Credit Card</h1>
                    <p>We offer you a chance to travel with your credit card</p>
                <div class="creditcard">
                    <img src="images/Creditcard.jpg" alt="">
                </div>
                </div>





            </section>
            <!-- PJESA E "Oferta 4" -->
            <section>
                <div class="text4">
                   <h1> Travel with your Swiss Airlines </h1>
                </div>
                <div class="swiss">
                    <img src="images/swiss.png" alt="">
                   <a href="booking.php"> <button  class="redirect3">Book now</button></a>

                </div>




            </section>
            <!-- PJESA E "back to top" -->
            <div class="top1">
                <a class="GoTop" href=""> Back to top<i class="fa-solid fa-arrow-up"></i> </a>
              </div>
    
            <!-- PJESA E "Footerit" -->
            <section class="footer">
            <div class="links">
              <a  id="ab"  href="aboutUs.php">About</a>
              <a id="of" href="offers.php">Offers</a>
              <a id="boo" href="booking.php">Booking</a>
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


         
<script src="offers.js"></script>

    
</body>
</html>