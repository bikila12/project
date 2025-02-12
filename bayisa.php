<?php
ob_start();
?>
<html>
<head>
<title> Home Page</title>
<link href="good.css" rel="stylesheet" type="text/css" />

</head>
<body id="contianer">
<div id="bod">
<div>
<?php
		include "yheader.php";
		?>
</div>                    
<div id="left">
<?php
		include "yleft.php";
		?>	
</div>
<div id="cent">
<div id="img">
<img src="iterfaceimage/1a.PNG" width="900" height="707"/>
</div>
<img src="iterfaceimage/wel8.gif" width="900" height="207"/>
</div>
<div id="righ" align="center" style="background-color:green">
<?php
		include "yright.php";
		?>
		<?php 
if (isset($_POST['Login']))
			
			{
$UserName=$_POST['uname'];
$Password=$_POST['pword'];
$UserType=$_POST['selectop'];
if($UserType==="--select one--")
{
?>
<div class="alert alert-error">
			  	 Please select your account type
				 and try again!!!
				</div>
<?php 
}
else
{
	if ($UserType === "Administrator") {
		// Establish database connection
		$con = mysqli_connect("localhost", "root", "", "gcvs_db_success");
	
		// Check connection
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
	
		// Prepare and execute query
		$sqli = "SELECT * FROM user WHERE username='" . $UserName . "' AND password='" . $Password . "' AND User_type='" . $UserType . "'";
		$result = mysqli_query($con, $sqli);
	
		if (!$result) {
			die("Query failed: " . mysqli_error($con));
		}
	
		// Check the number of records found
		$records = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
	
		if ($records == 0) {
			?>
			<div class="alert alert-error">
				Please check your User Name, Password, and select your account type, and try again!!!
			</div>
			<?php
		} else {
			session_start();
			$_SESSION['username'] = $row['username'];
			header("location:AdminPage.php");
		}
		// Close connection
		mysqli_close($con);
	} elseif ($UserType === "Registerar") {
		// Establish database connection
		$con = mysqli_connect("localhost", "root", "", "gcvs_db_success");
	
		// Check connection
		if (!$con) {
			die("Connection failed: " . mysqli_connect_error());
		}
	
		// Prepare and execute query
		$sqli = "SELECT * FROM user WHERE username='" . $UserName . "' AND password='" . $Password . "' AND User_type='" . $UserType . "'";
		$result = mysqli_query($con, $sqli);
	
		if (!$result) {
			die("Query failed: " . mysqli_error($con));
		}
	
		// Check the number of records found
		$records = mysqli_num_rows($result);
		$row = mysqli_fetch_array($result);
	
		if ($records == 0) {
			?>
			<div class="alert alert-error">
				Please check your User Name, Password, and select your account type, and try again!!!
			</div>
			<?php
		} else {
			session_start();
			$_SESSION['username'] = $row['username'];
			header("location:RegisterarPage.php");
		}
	
		// Close connection
		mysqli_close($con);
	}
	
}
}
?>

</div>
<?php
		include "yfoot.php";
		?>
</div>
<?php
		ob_end_flush();
		?>
</body>
</html>
