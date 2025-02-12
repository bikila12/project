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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
<!--
function validationForm() {
var gfn=document.forma.Gfname.value
var id=document.forma.Gid.value
var gmn=document.forma.Gmname.value
var gln=document.forma.Glname.value
var yog=document.forma.Yog.value
var gqu=document.forma.Gqul.value
var gdp=document.forma.gdep.value
var gdpp=document.forma.image.value
var gdppr=document.forma.Gpa.value
if(id=="")
{
window.alert("ID can not left blank");
return false;
}
 else if (gfn=="")
{
window.alert("Graduate first name can not left blank");
return false;
}
else if (isNaN(gfn)==false)
{
window.alert("Graduate first name can not be number");
return false;
}
else if (gmn=="")
{
window.alert("Graduate Midle name can not left blank");
return false;
}
else if (isNaN(gmn)==false)
{
window.alert("Graduate Middle name can not be number");
return false;
}
else if (gln=="")
{
window.alert("Graduate Last name can not left blank");
return false;
}
else if (isNaN(gln)==false)
{
window.alert("Graduate Last name can not be number");
return false;
}
else if (yog=="--select one--")
{
window.alert("select year of garduation");
return false;
}
else if (gqu=="--select one--")
{
window.alert("Select Graduate qualification");
return false;
}
else if (!((document.forma.mgender[0].checked)||(document.forma.mgender[1].checked)))
{
window.alert("Select gender option");
return false;
}

else if (gdp=="--select one--")
{
window.alert("select Department");
return false;
}

 else if(gdppr=="")
{
window.alert("Cumulative GPA can not left blank");
return false;
}
}
//>
</script>
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
<div id="aform">
<h3><font size="" ><i>Insert Graduate Information Form:</i></font></h3>
<form action="reginsertgraduateinfo.php" name="forma" method="post" enctype="multipart/form-data">
<table cellspacing="15" cellpadding="10" bgcolor="#FFCCFF">
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Graduate ID:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield1">
              <label><input type="text" name="Gid" class="user_name_hover" id="span9001" placeholder="Graduate Id" size="30" required></label><span class="textfieldRequiredMsg"><b>Graduate ID required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Frist Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield2">
              <label><input type="text" name="Gfname" id="span9001" placeholder="First Name" size="30" required></label><span class="textfieldRequiredMsg"><b>Frist Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Middle Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield3">
              <label><input type="text" name="Gmname" id="span9001" placeholder="Middle Name" size="30"required ><span class="textfieldRequiredMsg"><b>Middle Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Last Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield4">
              <label><input type="text" name="Glname" id="span9001" placeholder="Last Name" size="30" required></label><span class="textfieldRequiredMsg"><b>Last Name required</b></span></span></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Year of Graduation:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="Yog" id="span9001"required>
<option>--select one--</option>
<option>2017</option>
<option>2018</option>
<option>2019</option>
<option>2020</option>
<option>2021</option>
<option>2022</option>
<option>2023</option>
<option>2024</option>
<option>2025</option>
<option>2026</option>
<option>2027</option>
<option>2028</option>
<option>2029</option>
<option>2030</option>
<option>2031</option>
</select></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Quaification:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  <select name="Gqul" id="select"required>
    <option>--select one--</option>
    <option>Bachelors Degree</option>
    <option>Post Graduate</option>
  </select></td>
</tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Gender:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="radio" name="mgender" value="Male"required> Male 
<input type="radio" name="mgender" value="Female"required> Female </td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Department:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="gdep" id="span9001"required>
<option>--select one--</option>
<option>Computer Science</option>
<option>Plant Science</option>
<option>Animal Science</option>
<option>Agro_Economics</option>
<option>Natural Resource Management</option>
<option>Eco Tourism</option>
<option>Health Officer (HO)</option>
<option>Nursing</option>
<option>Midwifery</option>
<option>Statistics</option>
<option>Mathematics</option>
<option>Biology</option>
<option>Chemistry</option>
<option>Physics</option>
<option>Sport Science</option>
<option>Economics</option>
<option>Accounting and Finance</option>
<option>Management</option>
<option>Tourism Management</option>
<option>English</option>
<option>History</option>
<option>Geography</option>
<option>Psychology</option>
<option>Civics and Ethical Education</option>
<option>Law</option>
<option></option>
</select></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Upload Photo:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="file" name="image" id="span9001"required></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Cumlative GPA:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield5">
              <label><input type="text" name="Gpa"id="span9001" placeholder="GPA" size="30" required></label><span class="textfieldRequiredMsg"><b>Cumlative GPA required</b></span></span></td></tr>
</table><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" name="submitb" onClick="validationForm()"><i class="icon-ok-sign icon-large"></i>REGISTER</button>
<input type="reset" value="CLEAR" class="btn btn-primary" name="gsub""/><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="button" value="IMORT FROM EXCEL"ONCLICK="window.location.href='excel/index.php'" class="btn btn-primary"/>
</div>
</div>
<?php
		include "yfoot.php";
		?>
</div>
		<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>
<?php
}
?>