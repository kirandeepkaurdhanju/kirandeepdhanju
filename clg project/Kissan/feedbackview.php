<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>User View</title>
</head>

<body>
<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());

?>
<div>
<table width="950">
<tr>
<th>ID</th>
<th>Name</th>
<th>Mobile No.</th>
<th>Email ID</th>
<th>Feedback/Suggestion</th>

</tr>

<?php
$res=mysql_query("select * from contact order by Id desc", $con)or die (mysql_error());
while($row=mysql_fetch_array($res))
{
echo'<tr>';	
echo'<td>'.$row['Id'].'</td>';	
echo'<td>'.$row['name'].'</td>';	
echo'<td>'.$row['mobile'].'</td>';	
echo'<td>'.$row['email'].'</td>';	
echo'<td>'.$row['msg'].'</td>';	
echo'</tr>';	

}


?>

</table>

</div>
</body>
</html>