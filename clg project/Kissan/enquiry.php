<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
</head>

<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());

?>
<?php
if(isset($_POST['btn']))
{
$name=$_POST['nm'];
$gender=$_POST['gn'];
$mobile=$_POST['mb'];
$email=$_POST['em'];
$enquiry=$_POST['enq'];
$remarks=$_POST['rem'];


mysql_query("insert into  enquiry(name,gender, mobile, email, enquiry, remarks) values(
'$name','$gender','$mobile','$email','$enquiry','$remarks')",$con)or die(mysql_error());

}

?>


<body>
<form id="form1" name="form1" method="post" action="">
  <table width="688" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td width="106">Name</td>
      <td width="547"><span id="sprytextfield1">
        <label for="nm"></label>
        <input type="text" name="nm" id="nm" style="padding:10px; border:#666 solid 1px; width:350px;" / />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Gender</td>
      <td><span id="spryselect1">
        <label for="gn"></label>
        <select name="gn" id="gn" style="padding:10px; border:#666 solid 1px; width:370px;" />
          <option value="Male">Male</option>
          <option value="Female">Female</option>
          <option value="Transgender">Transgender</option>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>Mobile No</td>
      <td><span id="sprytextfield2">
        <label for="mb"></label>
        <input type="text" name="mb" id="mb"style="padding:10px; border:#666 solid 1px; width:350px;"  />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Email-ID</td>
      <td><span id="sprytextfield3">
        <label for="em"></label>
        <input type="text" name="em" id="em"style="padding:10px; border:#666 solid 1px; width:350px;"  />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Enquiry</td>
      <td><span id="spryselect3">
        <label for="enq"></label>
        <select name="enq" id="enq"style="padding:10px; border:#666 solid 1px; width:370px;" >
          <option value="About Services">About Services</option>
          <option value="About Rotavator">About Rotavator</option>
          <option value="About Tractor">About Tractor</option>
          <option value="About Combine">About Combine</option>
          <option value="About Happy Seeder">About Happy Seeder</option>
          <option value="Others">Others</option>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>Remarks</td>
      <td><span id="sprytextarea1">
        <label for="rem"></label>
        <textarea name="rem" id="rem" cols="45" rows="5" style="padding:10px; border:#666 solid 1px; width:350px;" ></textarea>
      <span class="textareaRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btn" id="btn" value="Submit"style="padding:10px; border:#666 solid 1px; width:370px;"  /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var spryselect2 = new Spry.Widget.ValidationSelect("spryselect2");
var spryselect3 = new Spry.Widget.ValidationSelect("spryselect3");
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
</script>
</body>
</html>