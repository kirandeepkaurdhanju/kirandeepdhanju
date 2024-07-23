<?php
session_start();
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>website controller | admin</title>
</head>

<body>
<?php
$uname=$_SESSION['adm'];
if($uname=="" or $uname==NULL)
{
	echo'<script>window.location="adminlogin.php"</script>';
}

?>


<div style="width:960px; margin:auto;">

<h1 style="text-align:center;">WELCOME ADMIN</h1>


<table width="960">

<tr>
<td style="background-color:#000; padding:10px;"><a href="welcome.php" target="admn" style="color:#FFF; text-decoration:none;">Home</a></td>
<td style="background-color:#000; padding:10px;"><a href="adupdates.php" target="admn" style="color:#FFF; text-decoration:none;">New Updates</a></td>
<td style="background-color:#000; padding:10px;"><a href="announcements.php" target="admn" style="color:#FFF; text-decoration:none;">Announcements</a></td>
<td style="background-color:#000; padding:10px;"><a href="userview.php" target="admn" style="color:#FFF; text-decoration:none;">Reg. Users</a></td>
<td style="background-color:#000; padding:10px;"><a href="feedbackview.php" target="admn" style="color:#FFF; text-decoration:none;">Feedbacks</a></td>
<td style="background-color:#000; padding:10px;"><a href="enqview.php" target="admn" style="color:#FFF; text-decoration:none;">Enquiries</a></td>
<td style="background-color:#000; padding:10px;"><a href="adchange.php" target="admn" style="color:#FFF; text-decoration:none;">Change Password</a></td>
<td style="background-color:#000; padding:10px;"><a href="adminlogout.php" style="color:#FFF; text-decoration:none;">Logout</a></td>
</tr>

</table>


<iframe src="welcome.php" name="admn" style="width:960px; height:800px; border:none;"></iframe>

</div>






</body>
</html>