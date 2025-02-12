<?php
$gid=$_POST['Gid'];
$yog=$_POST['Yog'];
$gqul=$_POST['gqul'];
$con = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("gcvs_db_success", $con) or die("Can not select Database");
$q = "select * from student where ID like '%$gid%' and Year_of_Graduation like '%$yog%' and Qualification like '%$gqul%'";
$r=mysql_query($q,$con);
if(mysql_num_rows($r)==0)
 {
 echo"No such record exists";
  exit();
 }
$q="delete from student where ID='$gid' AND Year_of_Graduation='$yog'";
mysql_query($q);
echo"Record deleted successfully";
?>