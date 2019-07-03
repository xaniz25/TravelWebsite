<!--Shanice Talan-->
<?php
  include("header.php");
  session_start();
  if(isset($_SESSION['CustUserID'])){
    header("Location: http://localhost/project/customerentry.php");
  }
  /*to test, userid is test, password is test, hashed password is $2y$10$CC8bmlR1I6vrbyjrccCebuPCAxP/cck3n/VaYWpQm.c8Tlxi91DbS
  or import attached database*/
?>

<body>

  <?php include("menu.php"); ?>

    <div class="contain">
    <div id="agentlogin" class"agentform">
    <form name=agentLogin method="post" onSubmit="return checkLogin()" action="customerverify.php">
      <p>Customer Login &nbsp;&nbsp;
        <?php //show error message if user/pwd invalid
          $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
          if(strpos($url, "error=invalid")==true) {
          echo "<span id='error'>Invalid UserID or Password!</span>";}
          else if(strpos($url, "error=loggedout")==true) {
          echo "<span id='error'>Please Login</span>";}
        ?>
      </p>
      <table>
        <tr>
          <td><input type="text" name="uid" id="uid" placeholder="User ID" size="30" onFocus="showDscrptn('uidds')" onFocusout="hideDscrptn('uidds')"/>
          <p class="agtdscrptn" id="uidds">Please enter UserID</p></td>
        </tr>
        <tr>
          <td><input type="password" name="pwd" id="pwd" placeholder="Password" size="30" onFocus="showDscrptn('pwdds')" onFocusout="hideDscrptn('pwdds')"/>
          <p class="agtdscrptn" id="pwdds">Please enter Password</p></td>
        </tr>
        <tr><td><button type="submit" value="submit">Login</button></td></tr>
      </table>
    </form>
    </div>
  </div>

<?php include("footer.php"); ?>
