<!--Shanice Talan-->
<?php
session_start();
unset($_SESSION['CustUserID']);
session_destroy(); //destroys the session for agents too
header("Location: http://localhost/project/customerlogin.php");
?>
