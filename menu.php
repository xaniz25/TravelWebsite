<!--Shanice Talan-->
<header>
 <!--Logo and Title-->
 <a href="index.php"><img src="images/plane.png"/></a>
 <a href="index.php"><h2>Travel Experts</h2></a>

 <div id=login>
   <a href="agentlogin.php">
     <?php
     if(isset($_SESSION['AgtUserID']))
      echo "Welcome, $_SESSION[AgtUserID]!";
     else
        echo "Agent Login";
      ?>
    </a>

   <a href="customerlogin.php">
     <?php
     if(isset($_SESSION['CustUserID']))
      echo "Welcome, $_SESSION[CustUserID]!";
     else
      echo "Customer Login";
    ?>
   </a>
 </div>

 <!--Nav bar for bigger screens-->
 <ul class ="nav">
   <li><a href="index.php">Home</a></li>
   <li><a href="services.php">Services</a></li>
   <li><a href="packages.php">Packages</a></li>
   <li><a href="register.php">Register</a></li>
   <li><a href="agency1.php">Contact</a></li>
   <li><a href="reviews.php">Reviews</a></li>
 </ul>

 <!--Nav bar for smaller screens-->
 <div id="navdrop">
   <button id="navbtn">Menu</button>
   <ul class ="nav2">
     <li><a href="index.php">Home</a></li>
     <li><a href="services.php">Services</a></li>
     <li><a href="packages.php">Packages</a></li>
     <li><a href="register.php">Register</a></li>
     <li><a href="agency1.php">Contact</a></li>
     <li><a href="reviews.php">Reviews</a></li>
     <!--li><a href="links.php">Links</a></li-->
   </ul>
 </div>

</header>
