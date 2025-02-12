<?php
            session_start();
           if(!isset($_SESSION['username']))
		   { 
		   header("location:bayisa.php");
		   }
		   else
		   {
		   ?><html>
<head>
<link href="good.css" rel="stylesheet" type="text/css" />
<link href="admin.css" rel="stylesheet" type="text/css" />
<title>
Adminstrator page
</title>
</head>
<body id="contianer">
<div id="bod">
<?php
		include "adminheader.php";
		?>
						<div id="leftsh">
<?php
		include "adminleft.php";
		?>
		<div id="spaceesh">
<div id="aformsh">
<h3>TYPE YOUR PARAMETER TO SEARCH</h3>
<form method="post" action="searchforgcvs.php" style="background-color:#CCCCCC"">
<center><table cellpadding="50" cellspacing="50">
	<tr bgcolor="#000000">
	<td style="background-color:#CCCCFF"><select name="cbosearch">
      <option>Student_ID</option>
      <option>First_Name</option>
      <option>Middle_Name</option>
      <option>Last_Name</option>
      <option>Cumulative_GPA</option>
      <option>Year_Of_Graduation</option>
    </select>
	  <input type="text" name="search" placeholder= "Type to Search" />
    <input type="submit" class="btn btn-primary" name="cmdsearch" value="SEARCH" />	</td>
	</tr>
	</table></center>
    </form>
	</div>
</div>
	</div>
<?php
		include "yfoot.php";
		?>
</div>

</body>
</html>
<?php
}
?>
