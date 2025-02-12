
<html>
<head>
<title>Untitled Document</title>
</head>
<body>
<?php
// Establish Connection with Database
$con = mysql_connect("localhost","root");
mysql_select_db('gcvs_db',$con);
$result=mysql_query("SELECT *FROM admin WHERE username='tesfish'");
$row=mysql_fetch_array($result);
echo $row['Admin_Id'];
// Close the connection
mysql_close($con);
?>

</body>
</html>
