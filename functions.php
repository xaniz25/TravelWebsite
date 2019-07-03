<!--Shanice Talan-->
<?php
  //pass agent object
  function insertAgent($obj) {
    //connect to travelexperts database
    $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());

    //get each value from object
    $fname=$obj->getFname();
    $middle=$obj->getMidInitial();
    $lname=$obj->getLname();
    $phone=$obj->getPhone();
    $email=$obj->getEmail();
    $pos=$obj->getPos();
    $agcyid=$obj->getAgcyID();
    $uid=$obj->getUserID();
    $hashed=$obj->getHashed();

    //insert the values to each column
    $sql = "insert into agents (AgtFirstName, AgtMiddleInitial, AgtLastName, AgtBusPhone, AgtEmail, AgtPosition, AgencyId, UserID, UserPwd)
    values ('$fname','$middle','$lname','$phone','$email','$pos','$agcyid','$uid','$hashed')";

    //perform a query against the database
    $result = mysqli_query($link, $sql) or die("SQL Error");

    //print if successful
    if ($result) {
       $_SESSION['success']="Agent successfully added!";
       header("Location: http://localhost/project/addagents.php?insert=success");
    }
    else {
       $_SESSION['unsuccess']="Agent not added.";
       header("Location: http://localhost/project/addagents.php?insert=error");
    }
    mysqli_close($link);

}

//pass the customer array
function insertCustomer($data) {
  //connect to travelexperts database
  $link = mysqli_connect("localhost", "root", "", "travelexperts") or die("Connection Error: " . mysqli_connect_error());

  $values = implode("','",array_values($data));
  $attributes = implode(",", array_keys($data));

  //insert the values to each column
  $sql = "insert into customers ($attributes) values ('$values')";
  print_r($sql);
  //perform a query against the database
  $result = mysqli_query($link, $sql) or die("SQL Error");

  //print if successful
  if ($result) {
     $_SESSION['success']="You are successfully registered!";
     header("Location: http://localhost/project/register.php?insert=success");
  }
  else {
     $_SESSION['unsuccess']="Error. Not registered.";
     header("Location: http://localhost/project/register.php?insert=error");
  }
  mysqli_close($link);

}

//Darren Uong
function sqlConnect($tableName){

  $dbh = mysqli_connect("localhost", "root", "");
   mysqli_select_db($dbh, $tableName);

  //append data to Log, keeping track of sql queries
  $log = fopen("log.txt", "a+"); //a+ keeps existing data, pointer goes to EOL

  $date = date("r") . "\r\n";

  //check connection
  if (!$dbh){
     fwrite($log, mysqli_connect_errorno());
      fwrite($log, $date);
  }else{
     fwrite($log, 'Successfully Connected to ' . $tableName . '<br>');
      fwrite($log, $date);
      }

      return $dbh;
}

?>
