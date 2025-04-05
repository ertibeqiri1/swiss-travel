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
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">
</head>
<body>

<!-- NAVBAR -->
<div class="name">
    <p>Swiss Travel</p>
</div>

<nav>
    <ul class="sidebar">
        <li onclick="hideSidebar()"><a href="#"><i class="fa-solid fa-x"></i></a></li>
        <li><a href="offers.php">Offers</a></li>
        <li><a href="booking.php">Booking</a></li>
        <li><a href="aboutUs.php">About Us</a></li>
        <li><a href="contactus/contactUs.php">Contact Us</a></li>

        <?php if (isset($_SESSION['email'])): ?>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <!-- Show Dashboard for Admins -->
                <li><a href="logini/admin_page.php"><button type="button" class="button">Dashboard</button></a></li>
            <?php endif; ?>
            <!-- Show Logout Button when Logged In -->
            <li><a href="logini/logout.php"><button type="button" class="button">Logout</button></a></li>
        <?php else: ?>
            <!-- Show Login/Signup when NOT Logged In -->
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

<script>
    function showSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.style.display = 'flex';
    }
    function hideSidebar() {
        const sidebar = document.querySelector('.sidebar');
        sidebar.style.display = 'none';
    }
</script>

</body>
</html>


        <!-- PJESA E PARE "Book Now" -->
    <section class="homepage1">
        <div class="photo1">
            <img src="images/booknow.jpg" alt="">
            <h1 id="text1">Choose your  dream destination now! </h1>
            <p id="p1">
                Book your first dream destination, <br> you want to experience with Swiss Travel!
            </p>
           
            <a href="booking.html">
            <button class ="redirect1">Book now</button> 
            </a>


        </div>



    </section>

    <br 50px>
    <br>
    <br>
          <!-- PJESA E "Some Destinations" -->
    <section class="destination">
        <h1 id= "text2">Some Destinations</h1>
        <div class="fotot">
            <div class="rresht">
             <div class="foto1">
                <div class="destinacionet">
                    <img id="egypt" src="images/Egypt.jpg" alt="">
                    <h4 id="eg" >Egypt</h4>

                </div>
             </div>

           <div class="rresht">
             <div class="foto1">
                <div class="destinacionet">
                    <img id="madrid" src="images/Madrid.jpg" alt="">
                    <h4 id="ma">Madrid</h4>
                </div>
             </div>

             <div class="rresht">
                <div class="foto1">
                   <div class="destinacionet">
                       <img id="berlin"  src="images/berlin.jfif" alt="">
                       <h4 id="be">Berlin</h4>
                   </div>
                </div>

                <div class="rresht">
                    <div class="foto1">
                       <div class="destinacionet">
                           <img id="rome" src="images/rome.jpg" alt="">
                           <h4 id="ro">Rome</h4>
                       </div>
                    </div>
       
       
                   </div> 
   
   
               </div> 


            </div> 

            </div> 


        </div>
        </section>
        <br>
        
        <br>
         <!-- PJESA E "Login now" -->
        <section class ="advert">
            <div class ="adPhoto">
                <img src="images/advert.jpg" alt="">
                <h1 id="logintxt">Login now!</h1>
                <p id ="p2">Log in now to check out our newest offers, made to help 
                    <br> you create special memories that will last forever. 
                    <br> Don’t wait start making every 
                    <br>moment count today!</p>

                    <a href="logini/login.php">
                      <button class="redirect2">Log-in now</button>
                    </a>


            </div>

        </section>


        

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
              <p>Business </p>
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