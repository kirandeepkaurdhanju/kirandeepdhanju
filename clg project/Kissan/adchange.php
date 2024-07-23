<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
</head>

<body>

<div style="padding:20px; width:400px; margin:auto;">

  <form id="form1" name="form1" method="post" action="">
    <table width="400" border="0" cellspacing="5" cellpadding="5">
      <tr>
        <td>Email ID</td>
        <td><span id="sprytextfield1">
          <label for="em"></label>
          <input type="text" name="em" id="em" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td>DOB</td>
        <td><span id="sprytextfield2">
          <label for="dob"></label>
          <input type="text" name="dob" id="dob" />
        <span class="textfieldRequiredMsg">A value is required.</span></span></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="sb" id="sb" value="Change Password" /></td>
      </tr>
    </table>
  </form>
</div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>