<?php
            session_start();
           if(!isset($_SESSION['username']))
		   { 
		   header("location:bayisa.php");
		   }
		   else
		   {
		   ?>
<html>
<head>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<title>
Registerar page
</title>
</head>
<body id="contianer">
<div id="body">
<?php
		include "registerarheader.php";
		?>
		<div id="left">
<?php
		include "registerarLeft.php";
		?>
		</div>
<div id="spacee">
<h1 align="center"><font color="green" size="10" >You are Registrar of the system!</font></h1>
<img src="iterfaceimage/regr.JPG" width="800" height="500"/>
<p>
<h3 align="center"><font color="green" size="4">
Welcome to Online Graduate Credentials 
Verfication System! You are Registrar of the system </font></p></div></h3>

<?php
		include "yfoot.php";
		?>
</div>
</body>
</html>
<?php
}
?>