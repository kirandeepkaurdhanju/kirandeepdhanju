<?php
session_start();
?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>welcome user</title>
</head>

<body>

<?php
$user=$_SESSION['usr'];
if($user=="" or $user==NULL)
{
echo'<script>window.location="userlogin.php";</script>';
}
?>

<div style="width:960px; margin:auto;">

<h1 style="text-align:center;">WELCOME USER</h1>


<table width="960">

<tr>
<td style="background-color:#000; padding:10px;"><a href="welcome.php" target="admn" style="color:#FFF; text-decoration:none;">Home</a></td>
<td style="background-color:#000; padding:10px;"><a href="enquiry.php" target="admn" style="color:#FFF; text-decoration:none;">Enquire</a></td>
<td style="background-color:#000; padding:10px;"><a href="chngepswd.php" target="admn" style="color:#FFF; text-decoration:none;">Change Password</a></td>
<td style="background-color:#000; padding:10px;"><a href="userlogout.php" style="color:#FFF; text-decoration:none;">Logout</a></td>
</tr>

</table>


<iframe src="welcome.php" name="admn" style="width:960px; height:800px; border:none;"></iframe>

</div>





</body>
</html>