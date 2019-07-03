<!--Shanice Talan-->
<?php
  include("header.php");
  session_start();
  //if no user is logged in, go to login page
  if(!isset($_SESSION['AgtUserID'])){
    echo "<script type='text/javascript'>
          alert('Please Login to access this page!');
          window.location.replace('http://localhost/project/agentlogin.php?error=loggedout');
          </script>";
  }
?>
  <body>

    <?php include("menu.php"); ?>

    <div class="contain">
    <div id="addagent"  class"agentform">
    <form name=addAgents method="post" action="postagents.php" onSubmit="return validateAgentForm()">
      <p>Add New Agents &nbsp;&nbsp;
        <?php //show message if agent is inserted or not
          $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          if(strpos($url, "insert=success")==true) {
          echo "<span id='success'>Agent successfuly added!</span>";}
          else if(strpos($url, "insert=error")==true) {
          echo "<span id='error'>Agent not added.</span>";}
        ?>
      </p>
      <p id="registerError" style="font-size: 18px; visibility: hidden; color: red">Please complete form and check format!</p>
      <table>
        <tr>
          <td><input type="text" name="AgtFirstName" id="fname" placeholder="First Name" size="30" onFocus="showDscrptn('fnameds')" onFocusout="hideDscrptn('fnameds')"/>
          <p class="agtdscrptn" id="fnameds">Please enter First Name</p></td>
        </tr>
        <tr>
          <td><input type="text" name="AgtMiddleInitial" id="middle" placeholder="Middle Initial" size="30" onFocus="showDscrptn('middleds')" onFocusout="hideDscrptn('middleds')"/>
          <p class="agtdscrptn" id="middleds">Please enter Middle Initial</p></td>
        </tr>
        <tr>
          <td><input type="text" name="AgtLastName" id="lname" placeholder="Last Name" size="30" onFocus="showDscrptn('lnameds')" onFocusout="hideDscrptn('lnameds')"/>
          <p class="agtdscrptn" id="lnameds">Please enter Last Name</p></td>
        </tr>
        <tr>
          <td><input type="number" name="AgtBusPhone" id="phone" placeholder="Phone Number" size="20"phone onFocus="showDscrptn('phoneds')" onFocusout="hideDscrptn('phoneds')"/>
          <p class="agtdscrptn" id="phoneds">Please enter Phone Number</p></td>
        </tr>
        <tr>
          <td><input type="text" name="AgtEmail" id="email" placeholder="E-mail" size="30" onFocus="showDscrptn('emailds')" onFocusout="hideDscrptn('emailds')"/>
          <p class="agtdscrptn" id="emailds">Please enter E-mail as abc1@abc1.abc</p></td>
        </tr>
        <tr>
          <td><input type="text" name="AgtPosition" id="position" placeholder="Position" size="30" onFocus="showDscrptn('posds')" onFocusout="hideDscrptn('posds')"/>
          <p class="agtdscrptn" id="posds">Please enter Position</p></td>
        </tr>
        <tr>
          <td><input type="number" name="AgencyId" id="agencyid" placeholder="AgencyID" size="10" onFocus="showDscrptn('agencyds')" onFocusout="hideDscrptn('agencyds')"/>
          <p class="agtdscrptn" id="agencyds">Please enter AgencyID</p></td>
        </tr>
        <tr>
          <td><input type="text" name="UserID" id="uid" placeholder="UserID" size="30" onFocus="showDscrptn('uidds')" onFocusout="hideDscrptn('uidds')"/>
          <p class="agtdscrptn" id="uidds">Please enter UserID</p></td>
        </tr>
        <tr>
          <td><input type="text" name="UserPwd" id="pwd" placeholder="Password" size="30" onFocus="showDscrptn('pwdds')" onFocusout="hideDscrptn('pwdds')"/>
          <p class="agtdscrptn" id="pwdds">Please enter Password</p></td>
        </tr>
        <tr><td><button type="submit" value="submit">Add</button></td></tr>
      </table>
    </form>
    <?php //show message if insert is successful or not
        if(isset($_SESSION['success'])){ echo "Agent successfully inserted!";}
        else if(isset($_SESSION['unsuccess'])){ echo "Agent not inserted.";}
    ?>
    <div id="back"><a href=agententry.php><button>Back to Agent Dashboard</button></a></div><!--Dashboard home button-->
  </div>
  </div>

<?php include("footer.php"); ?>
