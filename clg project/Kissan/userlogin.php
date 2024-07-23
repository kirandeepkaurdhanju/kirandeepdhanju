<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>userlogin</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>
<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());

?>
<?php
if(isset($_POST['btn']))
{
	$user=$_POST['email'];
	$pswd=$_POST['pswd'];
	
	$userindb="A";
	$passindb="B";
	
	$res=mysql_query("select * from user where EMAIL='$user' and PASSWORD='$pswd'",$con)or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{
	$userindb=$row['EMAIL'];	
	$passindb=$row['PASSWORD'];
	$_SESSION['usr']=$row['EMAIL'];
	}
	
	if($userindb!="A" and $passindb!="B")
	{
		echo'<script>window.location="userprofile.php"</script>';
	}
		else
	{
		echo'<script>alert("invalid User ID or Password")</script>';
	}
}
?>
<body bgcolor="#F2F2F2">

<div style="width:1100px; margin:auto; background-color:transparent; height:580px;">
<div style="width:350px; height:500px; background-image:url(images/ulg1.png); border-radius:20px; float:left; box-shadow:0 0 5px #000000;"></div>
<div style="width:350px; margin-left:23px; margin-top:80px; height:500px; background-image:url(images/ulg2.png); box-shadow:0 0 5px #000000; border-radius:20px; float:left;"></div>
<div style="width:310px; padding:20px; height:500px; background-color:#FFF; box-shadow:0 0 5px #000000; border-radius:20px; float:right;">
<div style="text-align:center;"><img src="images/images/tt.png" width="200" /></div>
<h1 style="font-variant:small-caps; color:#069; text-align:center;">User Panel Entry</h1>

<form id="form1" name="form1" method="post" action="">
  <table width="300" border="0" cellpadding="5" cellspacing="5">
    <tr>
      <td><span id="sprytextfield1" >
        <label for="email"></label>
        <input type="text" name="email" placeholder="Email ID*" id="email" style="padding:10px; border:#666 solid 1px; width:270px;"/>
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      
      <td><span id="sprypassword1" >
        <label for="pswd"></label>
        <input type="password" name="pswd" id="pswd" placeholder="Password*"  style="padding:10px; border:#666 solid 1px; width:270px;" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      
      <td align="right"><input type="submit" name="btn" id="btn" value="Sign In" style="padding:10px; background-color:#F60; color:#FFF; font-weight:bold; border:none; width:130px;" /></td>
    </tr>
    
    <tr>
      
       <td><a href="forget.php" style="color:#069; font-size:20px; text-decoration:none;">Forget Password?</a></td>
    </tr>
    <tr>
      
       <td><a href="registration.php" style="color:#069; font-size:20px; text-decoration:none;">Register New User | Sign Up</a></td>
   </tr>
  </table>
</form>
</div>
<div style="clear:both;"></div>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>