<!--Shanice Talan-->
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
//then start session and go to agent entry page
if(password_verify($pwd,$row['UserPwd'])) {
  session_start();
  $_SESSION["CustUserID"]=$custuid;
  header("Location: http://localhost/project/customerentry.php");
}
//otherwise go back to login page and show an error message
else {
  $_SESSION["error"]="Invalid UserID or Password";
  header("Location: http://localhost/project/customerlogin.php?error=invalid");
}

mysqli_close($link);

?>
