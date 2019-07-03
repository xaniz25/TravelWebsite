<!-- Alex Tatarov, modified by Shanice Talan for Styling -->
<?php
include("header.php");
include("alexFunctions.php");
?>

<body>
  <?php
  include("menu.php");
  ?>
  <div class="contain">
    <div id="agency">
      <ul>
        <li><a class="active" href="agency1.php">Calgary Agents</a></li>
        <li><a href="agency2.php">Okotoks Agents</a></li>
        <li><a href="agencyall.php">All Agents</a></li>
      </ul>

      </br></br>
      <h2>Calgary Agents</h2>
      </br></br>
      
      <?php

      	$choice =1;
      	$agencyChoice=1;

      	//function to print the contact info for agents
      	printAgentsFromAgency($choice);
      	echo ("");

      ?>

      </br></br>
      <h2>Office Location</h2>
      </br></br>
      <?php printAgencyInfo($agencyChoice); ?></div>

<?php
include("footer.php");
?>
