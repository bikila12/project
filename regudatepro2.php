<html>
<head>
<title>MWU GCVS</title>
</head>
<body>
<?php 
$gid=$_GET['ID'];
$gfname=$_POST['Gfname'];
$gmname=$_POST['Gmname'];
$glname=$_POST['Glname'];
$gpa=$_POST['Gpa'];
$yog=$_POST['Yog'];
$gqul=$_POST['gqul'];
$mgender=$_POST['mgender'];
$gdep=$_POST['gdep'];
$gphoto=addslashes(file_get_contents($_FILES['image']['tmp_name']));
$image_type=addslashes($_FILES['image']['type']);
$con = mysql_connect("localhost","root") or die(mysql_error());
mysql_select_db("gcvs_db_success", $con) or die("Can not select Database");
if(move_uploaded_file ($_FILES['image']['tmp_name'],"image/".$_FILES['image']['name']))
$sql = "UPDATE student SET Frist_Name='".$gfname."',Midle_Name='".$gmname."',Last_Name='".$glname."',Cumulative_Gpa='".$gpa."',Year_of_Graduation='".$yog."',Qualification='".$gqul."',Gender='".$mgender."',Department='".$gdep."' ,Photo='".$gphoto."',Photo_type='".$image_type."' WHERE student.ID='".$gid."'";
if(!mysql_query($sql,$con))
{
die('Error:'.mysql_error());
}
mysql_close($con);
echo '<script type="text/javascript">alert("Student Updated Succesfully");window.location=\'regupdate.php\';</script>';
?>
</body>
</html>