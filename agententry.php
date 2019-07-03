<!--Shanice Talan-->
<?php
  session_start();
  include("header.php");
  //if no user is logged in, go to login page
  if(!isset($_SESSION['AgtUserID'])){
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
    <h4 id='welcome'>Welcome to Travel Experts Agent Dashboard, <?php echo $_SESSION['AgtUserID'] ?> !</h4>
    <!--add agent button-->
    <div id='dash'><a href=addagents.php><button>Add Agents</button></a>
    <!--logout button-->
  </br><a href=agentlogout.php><button>Log Out</button></a></div>
  </div>
  </div>

<?php include("footer.php"); ?>
