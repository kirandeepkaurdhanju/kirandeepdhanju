<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin User</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
</head>
<style type="text/css">
html
{
	background-color:#04805e;
}
</style>
<body>

<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());

?>
<?php
if(isset($_POST['btn']))
{
$user=$_POST['email'];
$pass=$_POST['pswd'];

$userindb="A";
$passindb="B";

$res=mysql_query("select * from adm where email='$user' and Password='$pass'",$con)or die(mysql_error());
while($row=mysql_fetch_array($res))
{
	$userindb=$row['email'];
	$passindb=$row['Password'];
	$_SESSION['adm']=$row['email'];
}


if($userindb!="A" and $passindb!="B")
{
	echo'<script>window.location="adminprofile.php"</script>';
}
else
{
	echo'<script>alert("invalid username or password!");</script>';
    }
    }
?>
<div style="height:60px;"></div>
<div style="width:800px; height:500px; background-image:url(images/ad-lgbg.png); margin:auto;">
<div style="width:480px; float:left;"></div>
<div style="width:300px; float:right; background-color:transparent; height:400px;">
<div style="height:40px;"></div>


<div style="text-align:center;"><img src="images/images/tt.png" width="200" /></div>

<h1 style="text-align:center;">Admin Sign in</h1>

<form id="form1" name="form1" method="post" action="">
  <table width="300" border="0" cellpadding="5" cellspacing="5">
    <tr>
      
      <td><span id="sprytextfield1">
        <label for="email"></label>
        <input type="text" name="email" id="email" placeholder="Email ID*" style="border:none; border-bottom:#333 dashed 1px; width:230px; padding:10px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      
      <td><span id="sprypassword1">
        <label for="pswd"></label>
        <input type="password" name="pswd" id="pswd" placeholder="Password*" style="border:none; border-bottom:#333 dashed 1px; width:230px; padding:10px;" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      
      <td align="right"><input type="submit" name="btn" id="btn" value="Sign In" style="width:150px; background-color:transparent; border:none; font-size:18px; font-weight:bold;" /></td>
    </tr>
    <tr>
      
      <td><a href="adminforgetpswd.php">Forgot Password !</a></td>
    </tr>
  </table>
</form></div></div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
</script>
</body>
</html>