<!-- Alex's functions (show agents and agencies) to be used in my pages -->
<!--Modified by Shanice Talan for styling-->
<!DOCTYPE html>
<html>
<body>
<?php
function  printAgencyInfo($agencyChoice){
		 $xac = $agencyChoice;
	   //the "@" suppresses error messages

$dbh = @mysqli_connect("localhost","root","") or @die("can't connect");
   mysqli_select_db($dbh, "travelexperts");


   if (!$dbh)
   {
      print("can't connect");
	  exit();
   }

   if (mysqli_select_db($dbh, "travelexperts"))
   {
     // print("Selected DB: travelexperts");
   }
   else
   {
    //  print("can't select DB: travelexperts");
	  exit();
   }

 	if  ($xac ==1) {
   $result = mysqli_query($dbh, "SELECT AgncyAddress, AgncyCity, AgncyPhone, AgncyFax FROM agencies WHERE AgencyId=1");
	} else if ($xac ==2){
		$result = mysqli_query($dbh, "SELECT AgncyAddress, AgncyCity, AgncyPhone, AgncyFax FROM agencies WHERE AgencyId=2");
	}else if ($xac ==3){
		$result = mysqli_query($dbh, "SELECT AgncyAddress, AgncyCity, AgncyPhone, AgncyFax FROM agencies");
	}



   ?>
   <table>
   <th>Address</th><th>City</th><th>Phone</th><th>Fax</th>
   <?php
   while ($row = mysqli_fetch_row($result))
   {
      print("<tr>");
	  foreach ($row as $col)
	  {
	     print("<td>$col</td>");
	  }
	  print("</tr>");
   }
   print("</table>");
// it is good practice to close db after opening it.
mysqli_close($dbh);
}



function  printAgentsFromAgency($choice){

	   //the "@" suppresses error messages
$AgencyChoice = $choice;
$dbh = @mysqli_connect("localhost","root","") or @die("can't connect");
   mysqli_select_db($dbh, "travelexperts");


   if (!$dbh)
   {
      print("can't connect");
	  exit();
   }

   if (mysqli_select_db($dbh, "travelexperts"))
   {
     // print("Selected DB: travelexperts");
   }
   else
   {
    //  print("can't select DB: travelexperts");
	  exit();
   }

   if ($AgencyChoice == 1){

   $result = mysqli_query($dbh, "SELECT AgtFirstName, AgtLastName, AgtPosition, AgtBusPhone, AgtEmail FROM agents WHERE AgencyId=1 ");
   } else if ($AgencyChoice == 2){
	  $result = mysqli_query($dbh, "SELECT AgtFirstName, AgtLastName, AgtPosition, AgtBusPhone, AgtEmail FROM agents WHERE AgencyId=2 ");
   } else if ($AgencyChoice == 3){
	  $result = mysqli_query($dbh, "SELECT AgtFirstName, AgtLastName, AgtPosition, AgtBusPhone, AgtEmail FROM agents");
   }


   ?>
   <table>
   <th colspan="2">Name</th><th>Position</th><th>Phone</th><th>Email</th>
   <?php
   while ($row = mysqli_fetch_row($result))
   {

	  print("<tr>");
	  foreach ($row as $col)
	  {
				//entire row can be clicked, so if a customer wants to email the agent, s/he can.
		print("<td><a href=mailto:'$col'>$col</a></td>");

	  }
	  print("</tr>");
   }
   print("</table>");
// it is good practice to close db after opening it.
mysqli_close($dbh);
}
?>
</body>
</html>
