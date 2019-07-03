<!--Shanice Talan-->
<!--Travel Agency Project - Index (Homepage)-->
<?php
include_once("header.php");
?>

  <body>

    <?php
    include_once("menu.php");
    ?>

    <!--Homepage-->
    <div class="contain">
       <div class="home">
         <?php
         date_default_timezone_set("America/Edmonton");
         $hours=date("h");
         $ampm=date("A");
         if($hours<12 && $hours>3 && $ampm=="AM"){ //from 3am to 11:59am
           echo"<h6>Good Morning! <img src=\"images/sun.png\" width=30px height=30px/></h6>";
         }
         else if ($hours >=6 && $hours<12 && $ampm=="PM"){//from 6pm to 12pm
           echo "<h6>Good Evening! <img src=\"images/moon.png\" width=30px height=30px/></h6>";
         }
         else if ($hours >=1 && $hours<3 && $ampm=="AM"){//from 1 am to 3am
           echo "<h6>Good Evening! <img src=\"images/moon.png\" width=30px height=30px/></h6>";
         }//from 12pm to 6pm
         else echo "<h6>Good Afternoon! <img src=\"images/sun.png\" width=30px height=30px/></h6>";

          ?>

        <h5>Welcome to</h5>
        <h1>Travel Experts</h1>
        <h5>for all your travel needs</h5>
      </div><!--div home-->
    </div><!--div contain-->

   <!--Services Links>
   <div class="services">
   conntect to database
   select * from products
   display in a list
   </div-->

<?php
  include_once("footer.php");
?>
