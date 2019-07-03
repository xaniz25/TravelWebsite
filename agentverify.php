<!--Shanice Talan-->
<?php
$agtuid=stripslashes($_REQUEST['uid']);
$pwd=stripslashes($_REQUEST['pwd']);

//connect to travelexperts database
$link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());

//Get UserPwd fron database
$sql = "SELECT `UserPwd` FROM `agents` WHERE `UserID`='$agtuid'";

//perform a query against the database
$result = mysqli_query($link, $sql) or die("SQL Error");

//fetch array
$row = mysqli_fetch_assoc($result);

//check if input password matches the value in database
//then start session and go to agent entry page
if(password_verify($pwd,$row['UserPwd'])) {
  session_start();
  $_SESSION["AgtUserID"]=$agtuid;
  header("Location: http://localhost/project/agententry.php");
}
//otherwise go back to login page and show an error message
else {
  $_SESSION["error"]="Invalid UserID or Password";
  header("Location: http://localhost/project/agentlogin.php?error=invalid");
}

mysqli_close($link);


?>
