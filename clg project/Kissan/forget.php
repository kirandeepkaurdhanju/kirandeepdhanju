<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<script src="SpryAssets/SpryValidationSelect.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css" />
<link href="SpryAssets/SpryValidationSelect.css" rel="stylesheet" type="text/css" />
</head>
<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());
?>

<body background="images/ufg.png">
<?php
if(isset($_POST['btn']))
{
	$email=$_POST['email'];
	$sques=$_POST['sques'];
	$ans=$_POST['ans'];
	
	$passindb="B";
	
	$res=mysql_query("select * from user where EMAIL='$email' and QUESTION='$sques' and ANS='$ans'",$con)or die (mysql_error());
	while($row=mysql_fetch_array($res))
	{
		$passindb=$row['PASSWORD'];
		
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




<div style="width:400px; padding:20px; background-color:#FFF; margin-left:300px; margin-top:170px;">

<form id="form1" name="form1" method="post" action="">
  <table width="390" border="0" cellpadding="5" cellspacing="0">
    <tr>
      <td>Email ID</td>
      <td align="right"><span id="sprytextfield1">
        <label for="email"></label>
        <input type="text" name="email" id="email" placeholder="Email ID*(abc@gmail.com)" style="padding:10px; width:200px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>Security Question</td>
      <td align="right"><span id="spryselect1">
        <label for="sques"></label>
        <select name="sques" id="sques" style="padding:10px; width:221px; border:#666 solid 1px;">
          <option value="Birth Place">Birth Place</option>
          <option value="Favourite Hobby">Favourite Hobby</option>
          <option value="Nick Name">Nick Name</option>
          <option value="Favourite Subject">Favourite Subject</option>
          <option value="Favourite Place">Favourite Place</option>
        </select>
        <span class="selectRequiredMsg">Please select an item.</span></span></td>
    </tr>
    <tr>
      <td>Answer</td>
      <td align="right"><span id="sprytextfield2">
        <label for="ans"></label>
        <input type="text" name="ans" id="ans" placeholder="Your Answer Please !" style="padding:10px; width:200px; border:#666 solid 1px;" />
      <span class="textfieldRequiredMsg">A value is required.</span></span></td>
    </tr>
    <tr>
      <td>&nbsp;</td>
      <td align="right"><input type="submit" name="btn" id="btn" value="Recover !" style="padding:10px; background-color:#366; border:none; color:#FFF;" /></td>
    </tr>
  </table>
</form></div>
<script type="text/javascript">
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var spryselect1 = new Spry.Widget.ValidationSelect("spryselect1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
</script>
</body>
</html>