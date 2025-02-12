<?php
$gid=$_POST['id'];
$con = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("gcvs_db_success", $con) or die("Can not select Database");
$q="delete from report where ID='$gid'";
mysql_query($q);
?>