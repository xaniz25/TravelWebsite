<!--Shanice Talan-->
<!--Travel Agency Project - Registration Page-->
<?php
include_once("header.php");
?>

<body>

  <?php
  include_once("menu.php");
  ?>

   <!--Background-->
   <div class="contain">
   <!--Registration Form-->
    <div id="register"><p>Register below:</p>
      <?php //show message if agent is inserted or not
        $url="http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]";
        if(strpos($url, "insert=success")==true) {
        echo "<span id='success'>You are successfully registered!</span>";}
        else if(strpos($url, "insert=error")==true) {
        echo "<span id='error'>Error. Not registered.</span>";}
      ?>
       <p id="registerError" style="font-size: 18px; visibility: hidden; color: red">Please complete form and check format!</p>
       <!--verify if all required input is entered before submitting-->
       <form id="regform" name="regform" action="postcustomers.php" method="post" onSubmit="return validateForm()">
         <!--when each input box is on focus, a description will show. when out of focus, hide it-->
          <table>
           <tr>
            <td>First Name: </td>
            <td>
              <input type="text" id="fname" name="fname" size='35' onFocus="showDscrptn('fnameds')" onFocusout="hideDscrptn('fnameds')"/>
              <p class="dscrptn" id="fnameds">Please enter First Name</p>
            </td>
           </tr>
           <tr>
           <td>Last Name: </td>
           <td>
             <input type="text" id="lname" name="lname" size='35' onFocus="showDscrptn('lnameds')" onFocusout="hideDscrptn('lnameds')"/>
             <p class="dscrptn" id="fnameds">Please enter Last Name</p>
           </td>
           </tr>
            <tr>
              <td>Address: </td>
              <td>
                <input type="text" id="address" name="address" size='35' onFocus="showDscrptn('addressds')" onFocusout="hideDscrptn('addressds')"/>
                <p class="dscrptn" id="addressds">Please enter Address</p>
              </td>
            </tr>
            <tr>
              <td>City: </td>
              <td>
                <input type="text" id="city" name="city" size='35' onFocus="showDscrptn('cityds')" onFocusout="hideDscrptn('cityds')"/>
                <p class="dscrptn" id="cityds">Please enter City</p>
              </td>
            </tr>
            <tr>
              <td>Province: </td>
              <td><select name="province">
                  <option value="AB">Alberta</option>
                  <option value="BC">British Columbia</option>
                  <option value="MB">Manitoba</option>
                  <option value="NB">New Brunswick</option>
                  <option value="NL">Newfoundland & Labrador</option>
                  <option value="NT">Northwest Territories</option>
                  <option value="NS">Nova Scotia</option>
                  <option value="NU">Nunavut</option>
                  <option value="ON">Ontario</option>
                  <option value="PE">Prince Edward Island</option>
                  <option value="QC">Quebec</option>
                  <option value="YT">Yukon</option>
              </td>
            </tr>
            <tr>
              <td>Postal Code: </td>
              <td>
                <input type="text" id="postal" name="postal" size='35' onFocus="showDscrptn('postalds')" onFocusout="hideDscrptn('postalds')"/>
                <p class="dscrptn" id="postalds">Please enter Postal Code as A1A1A1.</p>
              </td>
            </tr>
            <tr>
              <td>Country: </td>
              <td><select name="country">
                  <option value="CA">Canada</option>
                  <option value="US">United States</option>
              </td>
            </tr>
            <tr>
            <tr>
            <td>Phone: </td>
              <td>
                <input type="number" id="phone" name="phone" onFocus="showDscrptn('phoneds')" onFocusout="hideDscrptn('phoneds')"/>
                <p class="dscrptn" id="phoneds">Please enter Phone number</p>
              </td>
            </tr>
            <tr>
              <td>E-mail: </td>
              <td>
               <input type="text" id="email" name="email" size='35' onFocus="showDscrptn('emailds')" onFocusout="hideDscrptn('emailds')"/>
               <p class="dscrptn" id="emailds">Please enter E-mail as abc1@abc.abc</p>
              </td>
            </tr>
            <tr>
              <td>UserID: </td>
              <td>
                <input type="text" id="uid" name="uid" size="35" onFocus="showDscrptn('uidds')" onFocusout="hideDscrptn('uidds')"/>
                <p class="dscrptn" id="uidds">Please enter UserID</p></td>
            </tr>
            <tr>
              <td>Password: </td>
              <td>
                <input type="password" id="pwd" name="pwd" size="35" onFocus="showDscrptn('pwdds')" onFocusout="hideDscrptn('pwdds')"/>
                <p class="dscrptn" id="pwdds">Please enter Password</p></td>
            </tr>
          </table></br>

        <!--clicking buttons will call JS functions to confirm submission or reset form-->
        <button onClick="return submitForm()" type="submit" value="register">Register</button>
        <button onClick="return resetForm()" type="reset" value="reset">Reset</button>
       </form>
    </div><!--div register-->
  </div><!--div contain-->

<?php
  include_once("footer.php");
?>
