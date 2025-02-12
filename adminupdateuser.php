<?php
session_start();
if (!isset($_SESSION['username'])) { 
    header("location:bayisa.php");
} else {
?>
<html>
<head>
    <link href="good.css" rel="stylesheet" type="text/css" />
    <link href="admin.css" rel="stylesheet" type="text/css" />
    <script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
    <link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
    <title>Admin page</title>
</head>
<body id="contianer">
<div id="bod">
<?php
    include "adminheader.php";
?>
    <div id="left">
<?php
    include "adminleft.php";
?>
    </div>
    <div id="spacee">
        <div id="aform">
<?php
$gid = $_GET['ID'];

// Establish a MySQLi connection
$con = mysqli_connect("localhost", "root", "", "gcvs_db_success");

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

// Prepare the query to prevent SQL injection
$q = "SELECT * FROM user WHERE User_type = ?";
$stmt = mysqli_prepare($con, $q);
mysqli_stmt_bind_param($stmt, "s", $gid);
mysqli_stmt_execute($stmt);
$result = mysqli_stmt_get_result($stmt);

if (mysqli_num_rows($result) == 0) {
    echo "No such record exists";
    exit();
}

while ($row = mysqli_fetch_row($result)) {
    $Id = $row[0];
?>
<h3>UPDATE USER INFORMATION:</h3>
<form method="post" enctype="multipart/form-data" action="adminupdateuserpro.php?ID=<?php echo $Id;?>">
    <table cellspacing="15" cellpadding="10">
        <tr><td>User_type:</td><td><?php echo $row[0];?></td></tr>
        <tr><td>Name:</td><td><span id="sprytextfield1">
            <label><input type="text" name="Gfname" size="20" id="span9001" value="<?php echo $row[1];?>"></label>
            <span class="textfieldRequiredMsg"><b>Name required</b></span></span></td></tr>
        <tr><td>User Name:</td><td><span id="sprytextfield2">
            <label><input type="text" name="Gmname" size="20" id="span9001" value="<?php echo $row[2];?>"></label>
            <span class="textfieldRequiredMsg"><b>User Name required</b></span></span></td></tr>
        <tr><td>Password:</td><td><span id="sprytextfield3">
            <label><input type="text" name="Glname" size="20" id="span9001" value="<?php echo $row[3];?>"></label>
            <span class="textfieldRequiredMsg"><b>Password required</b></span></span></td></tr>
        <tr><td>Email:</td><td><span id="sprytextfield4">
            <label><input type="email" name="Gpa" size="20" id="span9001" value="<?php echo $row[4];?>"></label>
            <span class="textfieldRequiredMsg"><b>Email required</b></span></span></td></tr>
    </table>
    <input type="submit" name="browse" class="btn btn-primary" Value="Update">
</form>

<?php
}

// Close the prepared statement and the connection
mysqli_stmt_close($stmt);
mysqli_close($con);
?>

        </div>
    </div>
    <?php
        include "yfoot.php";
    ?>
</div>

<script type="text/javascript">
    var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
    var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
    var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
    var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
</script>
</body>
</html>

<?php
}
?>
