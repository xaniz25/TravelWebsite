<!--Shanice Talan-->
<?php
session_start();
unset($_SESSION['AgtUserID']);
session_destroy(); //destroys the session for customer too
header("Location: http://localhost/project/agentlogin.php");
?>
