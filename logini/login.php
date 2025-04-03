<?php
session_start();

// Prevent browser caching
header("Cache-Control: no-store, no-cache, must-revalidate, max-age=0");
header("Cache-Control: post-check=0, pre-check=0", false);
header("Pragma: no-cache");

// If already logged in, redirect to index.php
if (isset($_SESSION['email'])) {
    header("Location: ../index.php");
    exit();
}

$errors = [
  'login' => $_SESSION['login_error'] ?? '',
  'register' => $_SESSION['register_error'] ?? ''
];

$activeForm = $_SESSION['active_form'] ?? 'login';

// Clear session errors after storing them in variables
unset($_SESSION['login_error']);
unset($_SESSION['register_error']);
unset($_SESSION['active_form']);

function showError($error) {
    return !empty($error) ? "<p class='error-message'>$error</p>" : '';
}

function isActiveForm($formName, $activeForm) {
    return $formName === $activeForm ? 'active' : '';
}
?>






<!DOCTYPE html>
<html lang="en">
 <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Swiss Travel</title>
    <link rel="stylesheet" href="login.css">
    <script src="https://kit.fontawesome.com/c4254e24a8.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css">

</head>
<body>
 <!-- PJESA E "NAVBAR" -->
   
 <div class="navbar">
    <div class="logo">
       <a href="../index.html"> <img src="logo.jpg" alt=""></a>

    </div>
    <div class="name">
        <p>Swiss Travel</p>
        </div>
    <div class="links">
        <div class="Offers">
            <a href="../offers.html">Offers</a>
        </div>
  
        <div class="Booking">
            <a href="../booking.html">Booking</a>
        </div>
  
          <div class="about-us">
              <a href="../aboutUs.html">About Us</a>
          </div>
  
        <div class="Contact-Us">
            <a href="../contactus/contactUs.php">Contact Us</a>
        </div>
  
        <div class="Login">
            <a href="../logini/login.php"><button type="button" class="button"> Login/Signup</button></a>
  
        </div>
    </div>
  
  </div>

<section class="trupi">
<!-- PJESA E "Login/Signup " -->
<div class="container">
        <div class="form-box <?= isActiveForm('login', $activeForm); ?>" id="login-form">
            <form action="login_register.php" method="post" autocomplete="off">
                <h2>Login</h2>
                <?= showError($errors['login']);?>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <button type="submit" name="login">Login</button>
                <p >Don't have an account? <a href="#" onclick="showForm('register-form')">Register</a></p>

            </form>

        </div>

        <div class="form-box  <?= isActiveForm('register', $activeForm); ?>" id="register-form">
            <form action="login_register.php" method="post">
                <h2>Register</h2>
                <?= showError($errors['register']); ?>
                <input type="text" name="name" placeholder="Name" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                
                
                <select name="role" required>
                    <option value="">--Select Role--</option>
                    <option value="user">User</option>
                    <!--
                    <option value="admin">Admin</option>

                    -->
                </select>
              
                <button type="submit" name="register">Register</button>
                <p >Alredy have an account? <a href="#" onclick="showForm('login-form')">Login</a></p>

            </form>

        </div>
    </div>
    <script src="login.js"></script>
    
    </section>


    <!-- PJESA E "Footerit" -->
    <section class="footer">
      <div class="links">
        <a  id="ab"  href="aboutUs.html">About</a>
        <a id="of" href="offers.html">Offers</a>
        <a id="boo" href="booking.html">Booking</a>
        <a id="cu" href="contactUs.html">Contact-Us</a>

      
        
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
    <script>
    window.history.replaceState(null, "", window.location.href);
</script>
 

 

       
  


    
</body>
</html>