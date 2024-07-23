<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml"><!-- InstanceBegin template="/Templates/tp.dwt.php" codeOutsideHTMLIsLocked="false" -->
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<!-- InstanceBeginEditable name="doctitle" -->
<title>Kissan Agri Zone</title>
<!-- InstanceEndEditable -->
<style type="text/css">
html
{
background-image:url(images/bigb.png);	
}

.kiran
{
	width:1100px; margin:auto;
 text-align:center; font-size:24px; color:#FFF; border-bottom:#FFF dashed 2px; padding:10px; border-top:#FFF solid 2px;	
}
.kiran:hover
{
	transition:1s;
color:#FC0; transform:scale(1.15,1.15);	
 border-top:#FC0 dashed 2px;
  border-bottom:#FC0 solid 2px;
}
</style>
<link href="SpryAssets/SpryMenuBarHorizontal.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<!-- InstanceBeginEditable name="head" -->
<!-- InstanceEndEditable -->
</head>

<body>

<div style="background-color:#000; padding:20px;">

<div style="width:1100px; height:35px; margin:auto; background-color:transparent;">
<div style="width:190px; height:35px; float:left; text-align:center; font-variant:small-caps; font-size:24px; font-weight:bold; background-color:#FC0;"><span title="Kissan Agri Zone">Kissan</span></div>
<div style="width:900px; height:35px; background-color:transparent; float:right;">


  <ul id="MenuBar1" class="MenuBarHorizontal">
    <li><a href="index.php">Home</a>      </li>
    <li><a href="aboutus.php">About Us</a></li>
    <li><a class="MenuBarItemSubmenu" href="#">Our Products</a>
      <ul>
<li><a href="rotavator.php">Rotavator</a></li>
<li><a href="combine.php">Combine</a></li>
<li><a href="happyseeder.php">Happy Seeder</a></li>
<li><a href="superseeder.php">Super Seeder</a></li>
<li><a href="plough.php">Plough</a></li>
<li><a href="maizeseeder.php">Maize Seeder</a></li>
<li><a href="carrotseeder.php">Carrot Seeder</a></li>
<li><a href="potato.php">Potato Seeder</a></li>
      </ul>
    </li>
    <li><a href="services.php">Services</a></li>
    <li><a href="contact.php">Contact Us</a></li>
    <li><a href="#" class="MenuBarItemSubmenu">User</a>
      <ul>
        <li><a href="registration.php">Register</a></li>
        <li><a href="userlogin.php">Login</a></li>
      </ul>
    </li>
    <li><a href="adminlogin.php">Admin</a></li>
  </ul>
</div>
<div style="clear:both;"></div>
</div>

</div>
<!---------start-------------->
<div><!-- InstanceBeginEditable name="EditRegion1" -->
<?php
$con=mysql_connect("localhost","root","")or die(mysql_error());
mysql_select_db("website",$con)or die(mysql_error());

?>
<div style="width:1100px; height:400px; margin:auto; background-image:url(images/BNR.png);"></div>

<div style="height:30px;"></div>


<div style="background-color:#093; padding:30px;">

<div style="width:1100px; height:300px; margin:auto;">
<div style="width:730px; height:300px; background-color:#fff; float:left;">
<h1 style="font-variant:small-caps; padding-left:10px;">Kissan Agri Zone</h1>
<div style="padding:10px; text-align:justify; font-size:20px;">Kissan Agri zone is established in 2019 by Bikramjit singh and Charanjit singh. A major purpose of this firm is welfare of farmers as well as environment.
This firm have many farming equipments which are safe for our environment. Moreover, we use modern agriculture machinery, for instance:- 4 by 4 tractors, 4 by 4 combines and other harvesting tools like plough, combine harvester, rotavator or rotary tiller, disc harrow, leveler and happy seeder, super seeder, maize corn thresher, 
<br /><br /><a href="aboutus.php" style="padding:10px; background-color:#366; color:#FFF; text-decoration:none;">Read More..</a></div>

</div>

<div style="width:360px; height:300px; background-color:#FFF; float:right;">
<h1 style="text-align:center; font-variant:small-caps; border-bottom:#6C6C6C solid 1px;">Our New Launches</h1>

<div style="padding:10px;">
<marquee onmouseover="this.stop();" onmouseout="this.start();" direction="up" height="200">
<table width="330">
<tr>
<td colspan="4"><div style="text-align:center;"><img src="images/images/tt.png" width="200" /></div></td>
</tr>
<tr>
<th>Product</th>
<th title="Date of Launch">DOL</th>
<th>Details</th>
<th title="Expected Price">Exp. Rate</th>
</tr>

<?php
$res=mysql_query("select * from nprod",$con)or die(mysql_error());
while($row=mysql_fetch_array($res))
{
echo'<tr>';	
echo'<td>'.$row['prod'].'</td>';
echo'<td>'.$row['ldt'].'</td>';
echo'<td>'.$row['des'].'</td>';
echo'<td>'.$row['eprice'].'</td>';

echo'</tr>';	
}
?>



</table>
</marquee>
</div>



</div>
<div style="clear:both;"></div>
</div>

</div>
<div style="height:30px;"></div>
<div>
<marquee behavior="alternate" onmouseover="this.stop();" onmouseout="this.start();">
<table cellpadding="5" cellspacing="5">
<tr>
<td><img src="images/images/c2.jpg" width="300" height="250" /></td>
<td><img src="images/images/carrot sowing.jpg" width="300" height="250" /></td>
<td><img src="images/images/combine.jpeg" width="300" height="250" /></td>
<td><img src="images/images/leveler.jpg" width="300" height="250" /></td>
<td><img src="images/images/p1.jpg" width="300" height="250" /></td>
<td><img src="images/images/p2.jpg" width="300" height="250" /></td>
<td><img src="images/images/q5.jpeg" width="300" height="250" /></td>
<td><img src="images/images/q1.jpg" width="300" height="250" /></td>
<td><img src="images/images/super seeder5.jpeg" width="300" height="250" /></td>
<td><img src="images/images/p6.jpg" width="300" height="250" /></td>
</tr>

</table>
</marquee>
</div>
<div style="height:30px;"></div>

<!-- InstanceEndEditable -->



</div>

<!-------end--------->
<div style="height:20px;"></div>


<div style="padding:20px; background-color:#000;">
<div class="kiran">Proudly Desined By Kirandeep Kaur(10722026104)</div>
</div>



<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgDown:"SpryAssets/SpryMenuBarDownHover.gif", imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
<!-- InstanceEnd --></html>