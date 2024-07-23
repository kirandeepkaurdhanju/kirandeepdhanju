<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tp.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kissan Agri Zone</title>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
<!-- InstanceEndEditable -->
<style type="text/css">
html
{
background-image:url(images/bigb.png);	
}

.kiran
{
	width:1100px; margin:auto;
 text-align:center; font-size:24px; color:#FFF; border-bottom:#FFF dashed 2px; padding:10px; border-top:#FFF solid 2px;	
}
.kiran:hover
{
	transition:1s;
color:#FC0; transform:scale(1.15,1.15);	
 border-top:#FC0 dashed 2px;
  border-bottom:#FC0 solid 2px;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" -->
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<!-- InstanceEndEditable -->
</head>

<body>

<div style="background-color:#000; padding:20px;">

<div style="width:1100px; height:35px; margin:auto; background-color:transparent;">
<div style="width:190px; height:35px; float:left; text-align:center; font-variant:small-caps; font-size:24px; font-weight:bold; background-color:#FC0;"><span title="Kissan Agri Zone">Kissan</span></div>
<div style="width:900px; height:35px; background-color:transparent; float:right;">


  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="index.php">Home</a>      </li>
    <li><a href="aboutus.php">About Us</a></li>
    <li><a class="MenuBarItemSubmenu" href="#">Our Products</a>
      <ul>
<li><a href="rotavator.php">Rotavator</a></li>
<li><a href="combine.php">Combine</a></li>
<li><a href="happyseeder.php">Happy Seeder</a></li>
<li><a href="superseeder.php">Super Seeder</a></li>
<li><a href="plough.php">Plough</a></li>
<li><a href="maizeseeder.php">Maize Seeder</a></li>
<li><a href="carrotseeder.php">Carrot Seeder</a></li>
<li><a href="potato.php">Potato Seeder</a></li>
      </ul>
    </li>
    <li><a href="services.php">Services</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="#" class="MenuBarItemSubmenu">User</a>
      <ul>
        <li><a href="registration.php">Register</a></li>
        <li><a href="userlogin.php">Login</a></li>
      </ul>
    </li>
    <li><a href="adminlogin.php">Admin</a></li>
  </ul>
</div>
<div style="clear:both;"></div>
</div>

</div>
<!---------start-------------->
<div><!-- InstanceBeginEditable name="EditRegion1" -->
<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());

?>
<?php
if(isset($_POST['btn']))
{
$NAME=$_POST['nm'];
$FNAME=$_POST['fnm'];
$GENDER=$_POST['gn'];
$CATEGORY=$_POST['cat'];
$DOB=$_POST['dob'];
$ADDRESS=$_POST['add'];
$MOBILE=$_POST['mb'];
$EMAIL=$_POST['email'];
$PASSWORD=$_POST['pswd'];
$CPSWD=$_POST['cpswd'];
$QUESTION=$_POST['sques'];
$ANSWER=$_POST['ans'];
$REMARKS="0";

if($PASSWORD==$CPSWD)
{
mysql_query("insert into user(NAME,FNAME,GENDER,CATEGORY,DOB,ADDRESS,MOBILE,EMAIL,PASSWORD,QUESTION,ANS,REMARKS) values('$NAME','$FNAME','$GENDER','$CATEGORY','$DOB','$ADDRESS','$MOBILE','$EMAIL','$PASSWORD','$QUESTION','$ANSWER','$REMARKS')",$con)or die(mysql_error());
}
else
{
	echo'<script>alert("Password and Confirm Password Must be Same !");</script>';
}
}

?>
<div style="text-align:center; padding:30px; font-weight:bold; font-variant:small-caps; color:#FFF; text-shadow:0 0 5px #000000; font-size:80px;">User Registration</div>

<div style="height:auto; width:1000px; margin:auto; background-color:#FFF;">

<div style="padding:10px;">
  <form id="form1" name="form1" method="post" action="">
    <table width="980" border="0">
      <tr>
        <td width="300">Name</td>
        <td><span id="sprytextfield1">
          <label for="nm"></label>
          <input type="text" name="nm" id="nm" style="padding:10px; border:#666 solid 1px; width:550px;" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      <tr>
        <td>Father's Name</td>
        <td><span id="sprytextfield2">
          <label for="fnm"></label>
          <input type="text" name="fnm" id="fnm"  style="padding:10px; border:#666 solid 1px; width:550px;"/>
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      <tr>
        <td>Gender</td>
        <td><span id="spryselect1">
          <label for="gn"></label>
          <select name="gn" id="gn" style="padding:10px; border:#666 solid 1px; width:571px;" >
            <option value="Male">Male</option>
            <option value="female">Female</option>
            <option value="Transgender">Transgender</option>
          </select>
          <span class="selectRequiredMsg">Please select an item.</span></span></td>
        </tr>
      <tr>
        <td>Category</td>
        <td><span id="spryselect2">
          <label for="cat"></label>
          <select name="cat" id="cat" style="padding:10px; border:#666 solid 1px; width:571px;" >
            <option value="GEN">GEN</option>
            <option value="OBC">OBC</option>
            <option value="SC">SC</option>
            <option value="ST">ST</option>
          </select>
          <span class="selectRequiredMsg">Please select an item.</span></span></td>
        </tr>
      <tr>
        <td>Date of Birth</td>
        <td><span id="sprytextfield3">
          <label for="dob"></label>
          <input type="text" name="dob" id="dob" style="padding:10px; border:#666 solid 1px; width:550px;" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      <tr>
        <td>Address</td>
        <td><span id="sprytextfield4">
          <label for="add"></label>
          <input type="text" name="add" id="add" style="padding:10px; border:#666 solid 1px; width:550px;" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      <tr>
        <td>Mobile No:</td>
        <td><span id="sprytextfield5">
          <label for="mb"></label>
          <input type="text" name="mb" id="mb" style="padding:10px; border:#666 solid 1px; width:550px;" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      <tr>
        <td>Email-ID</td>
        <td><span id="sprytextfield6">
          <label for="email"></label>
          <input type="text" name="email" id="email" style="padding:10px; border:#666 solid 1px; width:550px;" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      <tr>
        <td>Password</td>
        <td><span id="sprypassword1">
          <label for="pswd"></label>
          <input type="password" name="pswd" id="pswd" style="padding:10px; border:#666 solid 1px; width:550px;" />
          <span class="passwordRequiredMsg">A value is required.</span></span></td>
        </tr>
      <tr>
        <td>Confirm Password</td>
        <td><span id="spryconfirm1">
          <label for="cpswd"></label>
          <input type="password" name="cpswd" id="cpswd" style="padding:10px; border:#666 solid 1px; width:550px;" />
          <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
        </tr>
      <tr>
        <td>Security questions</td>
        <td><span id="spryselect3">
          <label for="sques"></label>
          <select name="sques" id="sques" style="padding:10px; border:#666 solid 1px; width:571px;">
            <option value="Birth Place">Birth Place</option>
            <option value="Who's your Favourite Actor">Who's your Favourite Actor</option>
            <option value="Favourite Place">Favourite Place</option>
            <option value="Nick Name">Nick Name</option>
            <option value="Favourite Subject">Favourite Subject</option>
          </select>
          <span class="selectRequiredMsg">Please select an item.</span></span></td>
        </tr>
      <tr>
        <td>Answer</td>
        <td><span id="sprytextfield7">
          <label for="ans"></label>
          <input type="text" name="ans" id="ans" style="padding:10px; border:#666 solid 1px; width:550px;" />
          <span class="textfieldRequiredMsg">A value is required.</span></span></td>
        </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" style="padding:10px; border:#666 solid 1px; width:571px;" name="btn" id="btn" value="Submit" /></td>
        </tr>
      </table>
    </form>
</div></div>







<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
var sprytextfield6 = new Spry.Widget.ValidationTextField("sprytextfield6");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "pswd");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var sprytextfield7 = new Spry.Widget.ValidationTextField("sprytextfield7");
</script>
<!-- InstanceEndEditable -->



</div>

<!-------end--------->
<div style="height:20px;"></div>


<div style="padding:20px; background-color:#000;">
<div class="kiran">Proudly Desined By Kirandeep Kaur(10722026104)</div>
</div>



<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<!-- InstanceEnd --></html>