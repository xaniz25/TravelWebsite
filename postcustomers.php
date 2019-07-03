<!--Shanice Talan-->
<?php
include("functions.php");

 $fname=$_POST["fname"];
 $lname=$_POST["lname"];
 $address=$_POST["address"];
 $city=$_POST["city"];
 $province=$_POST["province"];
 $postal=$_POST["postal"];
 $country=$_POST["country"];
 $phone=$_POST["phone"];
 $email=$_POST["email"];
 $uid=$_POST['uid'];
 $pwd=stripslashes($_POST['pwd']);
 $hashed=password_hash($pwd, PASSWORD_BCRYPT);

 $custarray = array("CustFirstName"=>$fname, "CustLastName"=>$lname, "CustAddress"=>$address, "CustCity"=>$city, "CustProv"=>$province, "CustPostal"=>$postal,
"CustCountry"=>$country, "CustPhone"=>$phone,"CustEmail"=>$email, "UserID"=>$uid,"UserPwd"=>$hashed);

 insertCustomer($custarray);

?>
