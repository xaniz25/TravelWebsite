<!--Tea Tammiste. Modified by Shanice for styling.-->
<?php
$host="localhost";
$user="root";
$password="";
$db="travelexperts";

$connect=mysqli_connect($host,$user,$password,$db);
$query="SELECT * FROM packages  WHERE PkgStartDate>= NOW();";
$result=mysqli_query($connect,$query);

include_once("header.php");

session_start();

error_reporting(0);

?>

  <body>
  <?php

  //INSERTED BY DARREN
  // Echo html modal to browser.  Stays hidden until button is clicked.

  echo("
            <!--The Modal, is invisible until button is clicked-->
            <div id='myModal' class='modal' style='display: block; visibility: hidden;'>

                <!-- Modal content -->
            <div class='modal-content' style='text-align: center'>

                    <span class='close' onclick='hideModal()'>&times;</span>
                    </br>
                    <h3>Please Log In</h3>
                    <p id='errorMessage' style='visibility: hidden; color: red;'> Incorrect username/password </p>

                    <form action='customerverifymodal.php' method='post'>
                        <label for='uid'>Username: </label><br>
                        <input type='text' name='uid' required='required'></br>
                        <label for='pwd'>Password: </label></br>
                        <input type='password' name='pwd' required='required'></br>
                        </br>
                        <button type='submit' value='Log In'>Login</button></br>
                    </form>
                    <form action='register.php'>
                      <button type='submit' value='Create Account'>Create Account</button>
                    </form>
                </div>

            </div>

");
  ?>

    <?php
    include_once("menu.php");
    ?>

  <!--Modified by Shanice for Styling-->
  <div class="contain">
    <div id="packages">
    	<h2>Available Packages</h2>
      <ul>
      	<?php
      		while($rows=mysqli_fetch_assoc($result))
      		{
      	?>
        <li class="eachpackage">
          <table>
            <tr><td><h3><?php echo $rows['PkgName']; ?></h3></td></tr>
            <tr><td><?php echo $rows['PkgDesc'];?></td></tr>
            <tr><td>Price: <?php echo $rows['PkgBasePrice']; ?></td></tr>
            <tr><td>Availability: &nbsp; <?php echo $rows['PkgStartDate']; ?> &nbsp; to &nbsp; <?php echo $rows['PkgEndDate']; ?></td></tr>
            <!--INSERTED BY DARREN-->
            <!--add button id/onclick function-->
    				<tr><td><button id=<?php echo ($rows['PkgName']); ?> onclick='checkoutConfirm(this.id)'>Get This Package</button></td></tr>
          </table>
        <?php
        //INSERTED BY DARREN
        // if-else statement, if custuserid is not set, modal pops up to prompt for log in
          if(!isset($_SESSION['CustUserID'])){
                echo "<script type='text/javascript'>
                        function checkoutConfirm() {
                            document.getElementById('myModal').style.visibility = 'visible';
                        }

                        function hideModal() {
                            document.getElementById('myModal').style.visibility = 'hidden';
                            document.getElementById('errorMessage').style.visibility = 'hidden';
                        }
                    </script>";
        }
        else{
        //if user is logged in already, proceed to order checkout
        //store package name in url querystring
            echo("<script type='text/javascript'>
                  function checkoutConfirm(id) {
                  var newWindow = 'http://localhost/project/order_checkout.php?pkg=' + id;
                  window.location.replace(newWindow);
                  }
                  </script>");
        }
        ?>
        <?php
        		}
        ?>
        </li>
      </ul>
    </div>
  </div>

  <?php
  //INSERTED BY DARREN
  //php script to display error message in modal. if customer succesfully logs in, modal disapperas

switch ($_GET["login"]){

    case "invalid":
         echo ("
            <script>
                document.getElementById('myModal').style.visibility = 'visible';
                document.getElementById('errorMessage').style.visibility = 'visible';
            </script>

        ");
        break;


    case "valid":

     echo ("
        <script>
            document.getElementById('myModal').style.visibility = 'hidden';
            document.getElementById('errorMessage').style.visibility = 'hidden';
        </script>

        ");
        break;
}

  ?>

  </body>

	<?php
	  include_once("footer.php");
	?>
