
<?php
require_once "Reservation.php";
?>

   
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
    <link rel="stylesheet" href="BookNY.css">
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
        <!-- Logout -->
        <li><a href="logini/logout.php"><button type="button" class="button">Logout</button></a></li>
    <?php else: ?>
        <!--  Login -->
        <li><a href="logini/login.php"><button type="button" class="button">Login/Signup</button></a></li>
    <?php endif; ?>
</ul>

<ul class="bar">
    <li><a href="../index.php"><img class="logo" src="logo.jpg" alt=""></a></li>
    <li class="hideOnMobile"><a href="../offers.php">Offers</a></li>
    <li class="hideOnMobile"><a href="../booking.php">Booking</a></li>
    <li class="hideOnMobile"><a href="../aboutUs.php">About Us</a></li>
    <li class="hideOnMobile"><a href="../contactus/contactUs.php">Contact Us</a></li>

    <?php if (isset($_SESSION['email'])): ?>
            <?php if ($_SESSION['role'] === 'admin'): ?>
                <li class="hideOnMobile"><a href="../logini/admin_page.php">Dashboard</button></a></li>
            <?php endif; ?>
            <li class="hideOnMobile"><a href="../logini/logout.php"><button type="button" class="button">Logout</button></a></li>
        <?php else: ?>
            <li class="hideOnMobile"><a href="../logini/login.php"><button type="button" class="button">Login/Signup</button></a></li>
        <?php endif; ?>

        <li class="menu-button" onclick="showSidebar()"><a href="#"><i class="fa-solid fa-bars"></i></a></li>
    </ul>
</nav>

 



<div class="container">
    <?php if (isset($_SESSION['email']) && in_array($_SESSION['role'], ['admin', 'user'])): ?>
        <form action="create.php" method="post">
            <h1>Make a Reservation</h1>

            <input type="text" name="name" placeholder="Name" required>
            <input type="text" name="surname" placeholder="Surname" required>
            <input type="email" name="email" placeholder="Email" 
                value="<?php echo ($_SESSION['role'] == 'user') ? htmlspecialchars($_SESSION['email']) : ''; ?>"
                <?php echo ($_SESSION['role'] == 'user') ? 'readonly' : ''; ?> required>

            <input type="date" name="reservation_date" required>
            <input type="text" name="credit_card" placeholder="Credit Card" required>
            <button type="submit">Book Now</button>
        </form>
    <?php else: ?>
      <div class="login-reminder">
    ⚠️ You must be <a href="../logini/login.php">logged in</a> to make a reservation.
</div>


    <?php endif; ?>
</div>




    <!-- PJESA E "Footerit" -->
    <section class="footer">
            <div class="links">
              <a  id="ab"  href="../aboutUs.php">About</a>
              <a id="of" href="../offers.php">Offers</a>
              <a id="boo" href="../booking.php">Booking</a>
              <a id="cu" href="../contactus/contactUs.php">Contact-Us</a>
      
        
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



       
    <script src="login.js"></script>


    
</body>
</html>