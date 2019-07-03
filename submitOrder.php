<!--Darren Uong-->
<?php
//When customer submits an order, they are redirected to this page.
include 'header.php';
include 'menu.php';
include 'functions.php';
session_start();

//Connect to travelexperts db
$link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());

//Get current time
$currentDate = date('Y-m-d H:i:s');

//Grab useful information from form
$PackageId = $_POST["PackageId"];
$CustomerId = $_POST["CustomerId"];
$tripType = $_POST["triptype"];
$travellers = $_POST["travellers"];

$sql = "INSERT into bookings (BookingDate, TravelerCount, CustomerId, TripTypeId, PackageId)
        VALUES ('$currentDate', '$travellers', '$CustomerId', '$tripType', '$PackageId')"; //sql insert string

 if ($result = mysqli_query($link, $sql) or die("SQL Error")){

    $BookingId =  mysqli_insert_id($link); //return booking ID if successful query

    echo ("
            <div class='contain'>
            <div id='congratulationBox'>
            <h1> Congratulations, $_SESSION[CustUserID]! Your booking has been confirmed</h1> <br>
            <h2> Your Booking ID is: " . $BookingId . "</br>" .
            "</div></div>");


}

include 'footer.php';

?>
