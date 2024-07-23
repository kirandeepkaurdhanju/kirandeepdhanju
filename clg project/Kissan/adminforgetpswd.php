<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>forget admin password</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<style type="text/css">
html
{
	background-image:url(images/ad-fg-bg.png);
}


</style>
</head>
<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());
?>

<body>
<?php
if(isset($_POST['btn']))
{
	$Email=$_POST['em'];
	$DOB=$_POST['dob'];
	
	$passindb="B";
	
	$res=mysql_query("select * from adm where email='$Email' and DOB='$DOB'",$con)or die(mysql_error());
	while($row=mysql_fetch_array($res))
	{
		$passindb=$row['Password'];
		
	}
	if($passindb!="B")
	
	{
	echo'your password is:'.$passindb;
	}
	else
	{
	echo'<script>alert("Notfound!");</script>';
	}
}

?>
<div style="height:50px;"></div>
<div style="width:300px; height:500px; background-image:url(images/bbh.png); margin:auto;">
<div style="height:40px;"></div>
<div style="text-align:center;"><img src="images/images/tt.png" width="200" /></div>


<form id="form2" name="form2" method="post" action="">
<table width="190" border="0" align="center" cellpadding="5" cellspacing="5">
  <tr>
    
    <td>
      <span id="sprytextfield1" >
        <label for="em"></label>
        <input type="text" name="em" id="em" placeholder="Email ID*" style="width:190px; padding:10px; border:#666 solid 1px;" />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
  </tr>
  <tr>
    
    <td>
      <span id="sprytextfield2">
        <label for="dob"></label>
        <input type="text" name="dob" id="dob" placeholder="DD-MM-YYYY*" style="width:190px; padding:10px; border:#666 solid 1px;" />
        <span class="textfieldRequiredMsg">A value is required.</span></span>
    </td>
  </tr>
  <tr>
    
    <td align="center">
      <input type="submit" name="btn" id="btn" value="Recover Password" style="padding:10px; border:none; box-shadow:0 0 5px #333333;" />
    </td>
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