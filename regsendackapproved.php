<html>
<head>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<title>
Registerar page
</title>
</head>
<body id="contianer">
<div id="bod">
<?php
		include "registerarheader.php";
		?>
<div id="space">
<div id="aform">
<?php
$con = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("gcvs_db_success", $con) or die("Can not select Database");
$q = "select * from student";
$r=mysql_query($q,$con);
?>
<h3>Send Acknowledegement Message Form:</h3>
<form action="" method="post">
<table cellspacing="20" cellpadding="10"><br><br><br><br><br>
<tr><td><b>ID:</b></td><td>
<select name="id">
<?php
while($row=mysql_fetch_array($r))
{
$qe = "select * from info_verification";
$rw=mysql_query($qe,$con);
while($ror=mysql_fetch_array($rw))
{
if($ror['ID']==$row['ID'])
{
if($ror['Verification']=="Verified")
{
echo "<option>".$row['ID']."</option>";
}
}
}
}
?>
</select></td></tr>
</table>
<input type="submit" name="search" value="Search">
</div>
</form>
</div>
<?php
		include "yfoot.php";
		?>
</div>

</body>
