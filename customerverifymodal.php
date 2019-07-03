<!--Shanice Talan, modified by Darren Uong
Verify customer log in when on Packages page-->
<?php
$custuid=stripslashes($_REQUEST['uid']);
$pwd=stripslashes($_REQUEST['pwd']);

//connect to travelexperts database
$link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());

//Get UserPwd fron database
$sql = "SELECT `UserPwd` FROM `customers` WHERE `UserID`='$custuid'";

//perform a query against the database
$result = mysqli_query($link, $sql) or die("SQL Error");

//fetch array
$row = mysqli_fetch_assoc($result);

//check if input password matches the value in database
//then start session and hide modal
if(password_verify($pwd,$row['UserPwd'])) {
  session_start();
  $_SESSION["CustUserID"]=$custuid;
  header("Location: http://localhost/project/packages.php?login=valid");
}
//otherwise show an error message
else {
  $_SESSION["error"]="invalid";
  header("Location: http://localhost/project/packages.php?login=invalid");
}

mysqli_close($link);

?>
