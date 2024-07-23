<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>
<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());
?>
<body>
<?php
if(isset($_POST['sb']))
{
$prod=$_POST['np'];
$arate=$_POST['dt'];
$diss=$_POST['onev'];
$eve=$_POST['rt'];
$rem="0";	

mysql_query("insert into annou(prod,rate,drate,eve,rem) values('$prod','$arate','$diss','$eve','$rem')",$con)or die(mysql_error());

}
?>
<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td>Name of Product</td>
      <td><span id="sprytextfield1">
        <label for="np"></label>
        <input type="text" name="np" id="np" style="width:300px; padding:10px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Actual Rate</td>
      <td><span id="sprytextfield2">
        <label for="dt"></label>
        <input type="text" name="dt" id="dt" style="width:300px; padding:10px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Discounted Price</td>
      <td><span id="sprytextfield4">
        <label for="onev"></label>
        <input type="text" name="onev" id="onev" style="width:300px; padding:10px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>On Event</td>
      <td><span id="sprytextfield3">
        <label for="rt"></label>
        <input type="text" name="rt" id="rt" style="width:300px; padding:10px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="sb" id="sb" value="Submit"  style="width:150px; background-color:#000; color:#FFF; padding:10px; border:none;" /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>