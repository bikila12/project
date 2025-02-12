<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
<title>Delete Student</title>
</head>
<body>
<?php
$Id=$_GET['FacId'];
$con = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("gcvs_db_success", $con) or die("Can not select Database");
	$sql = "delete from student where student.ID='".$Id."'";
	mysql_query ($sql,$con);
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Student Updated Succesfully");window.location=\'regupdate.php\';</script>';

?>
</body>
</html>
