<html>
<head>
<title>Delete Report</title>
</head>
<body>
<?php
$Id=$_GET['ID'];
$con = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("gcvs_db_success", $con) or die("Can not select Database");
	$sql = "delete from report where report.ID='".$Id."'";
	mysql_query ($sql,$con);
		$sqll = "delete from check_view where check_view.ID='".$Id."'";
	mysql_query ($sqll,$con);
		$sql1 = "delete from info_verification where info_verification.ID='".$Id."'";
	mysql_query ($sql1,$con);
		$sql2 = "delete from request_approval where request_approval.Employe_ID='".$Id."'";
	mysql_query ($sql2,$con);
		$sql3 = "delete from company where company.ID='".$Id."'";
	mysql_query ($sql3,$con);
			$sql4 = "delete from employe where employe.ID='".$Id."'";
	mysql_query ($sql4,$con);
	
	mysql_close ($con);
	echo '<script type="text/javascript">alert("Report Deleted Succesfully");window.location=\'adminsearchrepdel.php\';</script>';

?>
</body>
</html>