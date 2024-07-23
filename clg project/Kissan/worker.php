<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>
<form id="form1" name="form1" method="post" action="">
  <table width="400" border="0" cellspacing="5" cellpadding="5">
    <tr>
      <td>Name</td>
      <td><span id="sprytextfield1">
        <label for="nm"></label>
        <input type="text" name="nm" id="nm" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>father's name</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Gender</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Email-ID</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Contact No.</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Qualification</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Work Experience</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>Driving Licence</td>
      <td>&nbsp;</td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td><input type="submit" name="btn" id="btn" value="Submit" /></td>
    </tr>
  </table>
</form>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
</script>
</body>
</html>