<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>change password</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationPassword.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationConfirm.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationPassword.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationConfirm.css" rel="stylesheet" type="text/css" />
</head>
<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());
?>

<body>
<?php
if(isset($_POST['btn']))
{
  $email=$_POST['email'];
  $pswd=$_POST['pswd'];
  $npswd=$_POST['npswd'];
  $cpswd=$_POST['cpswd'];
  
  
  if($npswd==$cpswd)
  
  {
  mysql_query("update user set PASSWORD='$npswd' where EMAIL='$email'",$con)or die (mysql_error());
  }
  else
  {
  echo'<script>alert("password and confirm password should be same!!!");</script>';
  }
}

?>





<form id="form1" name="form1" method="post" action="">
  <table width="416" border="0">
    <tr>
      <td width="148">Email-ID</td>
      <td width="252"><span id="sprytextfield1">
        <label for="email"></label>
        <input type="text" name="email" id="email"  style="padding:10px; border:#666 solid 1px; width:250px;"/>
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Old Password</td>
      <td><span id="sprypassword1">
        <label for="pswd"></label>
        <input type="password" name="pswd" id="pswd" style="padding:10px; border:#666 solid 1px; width:250px;" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>New Password</td>
      <td><span id="sprypassword2">
        <label for="npswd"></label>
        <input type="password" name="npswd" id="npswd" style="padding:10px; border:#666 solid 1px; width:250px;" />
      <span class="passwordRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Confirm Password</td>
      <td><span id="spryconfirm1">
        <label for="cpswd"></label>
        <input type="password" name="cpswd" id="cpswd" style="padding:10px; border:#666 solid 1px; width:250px;" />
      <span class="confirmRequiredMsg">A value is required.</span><span class="confirmInvalidMsg">The values don't match.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btn" id="btn" value="Submit"  style="padding:10px; border:#666 solid 1px; width:250px;"/></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprypassword1 = new Spry.Widget.ValidationPassword("sprypassword1");
var sprypassword2 = new Spry.Widget.ValidationPassword("sprypassword2");
var spryconfirm1 = new Spry.Widget.ValidationConfirm("spryconfirm1", "npswd");
</script>
</body>
</html>