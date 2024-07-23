<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tp.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kissan Agri Zone | Contact US</title>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
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
$name=$_POST['nm'];
$mobile=$_POST['mb'];
$email=$_POST['email'];
$msg=$_POST['msg'];
$REMARKS="0";

mysql_query("insert into contact(name, mobile, email, msg, remark) values(
'$name','$mobile','$email','$msg','$REMARKS')",$con)or die(mysql_error());

}

?>


  <div style="height:20px;"></div>
<div style="width:1000px; margin:auto;">
  <div style="background-color:#FFFFD5; font-size:60px; text-align:center; padding:20px;">Contact us</div>
  <div style="height:20px;"></div>
  <div style="background-color:#FFF; padding:10px;">
  <div style="width:490px; font-size:20px; font-variant:small-caps; height:auto; float:left;">
  <h1 align="center">My Profile</h1>
  
    <table width="490" border="0" cellpadding="5" cellspacing="5">
      <tr>
        <td>Name:</td>
        <td>Kirandeep Kaur</td>
        </tr>
      <tr>
        <td>Father's Name : </td>
        <td>Davinder Singh</td>
        </tr>
      <tr>
        <td>Address:</td>
        <td>Village : Haidrabad Bet, PO: Sarai Jattan, Tehsil Sultanpur Lodhi, District Kapurthala(Punjab)</td>
        </tr>
      <tr>
        <td>Mobile No:</td>
        <td>+91-62843-96978</td>
        </tr>
      </table>
  
  </div>
  <div style="width:490px; float:right;">
    <form id="form2" name="form2" method="post" action="">
      <h1 align="center">Feedback</h1>
      
      <table width="490" cellpadding="5" cellspacing="5">
        <tr>
          <td>Name</td>
          <td><span id="sprytextfield1">
            <label for="nm"></label>
            <input type="text" name="nm" id="nm" style="padding:10px; border:#666 solid 1px; width:250px;" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr>
          <td>Mobile No</td>
          <td><span id="sprytextfield2">
            <label for="mb"></label>
            <input type="text" name="mb" id="mb" style="padding:10px; border:#666 solid 1px; width:250px;" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr>
          <td>Email-ID</td>
          <td><span id="sprytextfield3">
            <label for="email"></label>
            <input type="text" name="email" id="email" style="padding:10px; border:#666 solid 1px; width:250px;" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr>
          <td>Message</td>
          <td><span id="sprytextfield4">
            <label for="msg"></label>
            <input type="text" name="msg" id="msg" style="padding:10px; border:#666 solid 1px; width:250px;" />
            <span class="textfieldRequiredMsg">A value is required.</span></span></td>
          </tr>
        <tr>
          <td>&nbsp;</td>
          <td><input type="submit" name="btn" id="btn" value="Submit Your Feedback!" style="padding:10px; background-color:#069; color:#FFF; border:none;" /></td>
          </tr>
        </table>
      </form>
  </div>
  <div style="clear:both;"></div>
</div>

</div>



<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
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