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
<h3>Search Graduate Information:</h3>
<form action="regsearchpro.php" method="post">
<table cellspacing="20" cellpadding="10"><br><br><br><br><br><br
<tr><td><b>Graduate ID:</b></td><td><select name="gid">
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
<option>2023</option>
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
