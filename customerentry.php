<!--Shanice Talan-->
<?php
  session_start();
  include("header.php");
  //if no user is logged in, go to login page
  if(!isset($_SESSION['CustUserID'])){
    echo "<script type='text/javascript'>
          alert('Please Login to access this page!');
          window.location.replace('http://localhost/project/agentlogin.php?error=loggedout');
          </script>";
  }
?>

<body>

  <?php include("menu.php"); ?>

  <div class="contain">
  <div id="agententry" class"agentform">
    <h4 id='welcome'>Welcome, <?php echo $_SESSION['CustUserID'] ?> !</h4>
    <!--menu buttons-->
    <div id='dash'>
      <a href=#><button>View Bookings</button></a></br>
      <a href=#><button>Account Settings</button></a></br>
    <!--logout button-->
  </br><a href=customerlogout.php><button>Log Out</button></a></div>
  </div>
  </div>

<?php include("footer.php"); ?>
