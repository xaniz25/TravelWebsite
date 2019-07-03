<!--Darren Uong-->
<?php
//When customer selects an order, they are redirected to this page.
include 'header.php';
include 'menu.php';
include 'functions.php';
session_start();

//function to create order Booking ID, initializes with creation date time

$link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());



$PkgName = $_GET["pkg"]; //pkg name from url querystring


//find package id from pkg name
$sql = "SELECT PackageId FROM packages  WHERE PkgName LIKE '%" . $PkgName . "%'";

$result = mysqli_query($link, $sql) or die("SQL Error");
while ($row = mysqli_fetch_row($result)){
    $PkgId = $row[0];
}

//find package description and base price using package id
$sql = "SELECT PkgName, PkgDesc, PkgBasePrice FROM packages WHERE PackageId =" . $PkgId;
$result = mysqli_query($link, $sql) or die("SQL Error");
while ($row = mysqli_fetch_assoc($result)){
    $PkgName = $row['PkgName'];
    $PkgDesc = $row['PkgDesc'];
    $PkgBasePrice = $row['PkgBasePrice'];
}



//find customer information using customer id

$sql = "SELECT CustomerId, CustFirstName, CustLastName, CustAddress, CustCity, CustProv, CustPostal, CustCountry, CustPhone, CustEmail FROM customers WHERE UserID ='" . $_SESSION['CustUserID'] . "'";
$result = mysqli_query($link, $sql) or die("SQL Error");
while ($row = mysqli_fetch_assoc($result)){
    $CustomerId = $row['CustomerId'];
    $CustFirstName = $row['CustFirstName'];
    $CustLastName = $row['CustLastName'];
    $CustAddress = $row['CustAddress'];
    $CustCity = $row['CustCity'];
    $CustProv = $row['CustProv'];
    $CustPostal = $row['CustPostal'];
    $CustCountry = $row['CustCountry'];
    $CustHomePhone = $row['CustPhone'];
    $CustEmail = $row['CustEmail'];
}


echo ("
      <div class='contain'>
        <div id='packageBox'>
            <h2> Your Order </h2>");
            echo("<form action='submitOrder.php' method='post'>");
            echo("<h2>" . $PkgName . "</h2>");
            echo("<p>" . $PkgDesc . "</p>");
            echo("<p>Price: $" . $PkgBasePrice . "CAD</p><br>");
            echo("<p>Name: " . $CustFirstName . " " . $CustLastName);
            echo("<p>Email: " . $CustEmail);
            echo("<p>Address: " . $CustAddress);
            echo("<p>Postal Code: " . $CustPostal);
            echo("<p>Province: " . $CustProv);
            echo("<p>Country: " . $CustCountry);
            echo("<br><label for='travellers'> Number of Travellers </label>
                <input type='text' name='travellers' value='1' size='3'><br>");
            echo("<input type='radio' name='triptype' value='B'> Business Trip <br>
                <input type='radio' name='triptype' value='L' checked> Leisure Trip <br>
                <input type='radio' name='triptype' value='G'> Group Trip <br>");
            echo("<input type='text' name='CustomerId' value='" . $CustomerId . "'" . "style='visibility: hidden'<br>"); //hidden fields to pass through form
            echo("<input type='text' name='PackageId' value='" . $PkgId . "'" . "style='visibility: hidden'<br>"); //hidden fields to pass through form
            echo("<br><button type='submit'> Submit</button>");
            echo("</form>");


        echo("</div></div>");


include 'footer.php';

?>
