<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
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
$diss=$_POST['dess'];
$eve=$_POST['rt'];
$rem="0";	

mysql_query("insert into nprod(prod,ldt,des,eprice,rem) values('$prod','$arate','$diss','$eve','$rem')",$con)or die(mysql_error());

}
?>

<form id="form1" name="form1" method="post" action="">
  <table width="500" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td>Name of Product</td>
      <td><span id="sprytextfield1">
        <label for="np"></label>
        <input type="text" name="np" id="np" style="width:250px; padding:10px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Date of Launch</td>
      <td><span id="sprytextfield2">
        <label for="dt"></label>
        <input type="text" name="dt" id="dt" style="width:250px; padding:10px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Description</td>
      <td><span id="sprytextarea1">
        <label for="dess"></label>
        <textarea name="dess" id="dess" style="width:250px; padding:10px; border:#666 solid 1px; height:80px; resize:none;"></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Expected Price</td>
      <td><span id="sprytextfield3">
        <label for="rt"></label>
        <input type="text" name="rt" id="rt" style="width:250px; padding:10px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="sb" id="sb" value="Submit" style="width:271px; padding:10px; border:#666 solid 1px; background-color:#333; color:#FFF;" /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
</script>
</body>
</html>