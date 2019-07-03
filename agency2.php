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
        <li><a href="agency1.php">Calgary Agents</a></li>
        <li><a class="active" href="agency2.php">Okotoks Agents</a></li>
        <li><a href="agencyall.php">All Agents</a></li>
      </ul>

      </br></br>
      <h2>Okotoks Agents</h2>
      </br></br>

      <?php
      $choice =2;
      $agencyChoice=2;

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
