<html><head>
<link href="good.css" rel="stylesheet" type="text/css"/>
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
 if (gfn=="")
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
window.alert("Graduate Midle name can not be number");
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
else if (gdpp=="")
{
window.alert("select Upload image");
return false;
}
 else if(id=="")
{
window.alert("ID can not left blank");
return false;
}
}
//>
</script>
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
		?></div>
		<div id="spacee">
		<div id="p">
		<img src="iterfaceimage/regemp.jpg" width="370" height="300"/>
<p align="center"><strong><font size="5" color="green"><i>Welcome to jinka University Online Graduates Credentials Verification Systems:</font><br><br><font size="4" color="green"> Every company who wants to employe our <br><br>graduates can verify their credentials<br><br>by registering the Employee and </font><a href="rf.php"><font color="blue">Company</font></a></strong><p></div>
<div id="rf">
<h4>REGISTER GRADUATE TO BE EMPLOYED</h4>
<form action="insertEmployeData.php" method="post" enctype="multipart/form-data" name="forma">
<table cellspacing="15" cellpadding="10"bgcolor="#99CCCC">
<tr><td>Frist Name:</td><td><span id="sprytextfield1">
              <label><input type="text" name="Gfname" id="span9001" placeholder="Frist Name" size="30" required></label><span class="textfieldRequiredMsg"><br/><b>Frist Name required</b></span></span></td></tr>
<tr><td>Middle Name:</td><td><span id="sprytextfield2">
              <label><input type="text" name="Gmname" id="span9001" placeholder="Middle Name" size="30"required></label><span class="textfieldRequiredMsg"><br/><b>Middle Name required</b></span></span></td></tr>
<tr><td>Last Name:</td><td><span id="sprytextfield3">
              <label><input type="text" name="Glname" id="span9001" placeholder="Last Name" size="30"required></label><span class="textfieldRequiredMsg"><br/><b>Last Name required</b></span></span></td></tr>
<tr><td>Year of Graduation:</td><td><select name="Yog" id="span9001" required>
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
<tr><td>Qualification:</td><td><select name="Gqul" id="span9001"required>
<option>--select one--</option>
<option>Bachelors Degree</option>
<option>Post Graduate</option>
</select></td></tr>
<tr><td>Gender:</td><td><input type="radio" name="mgender" value="Male"required> Male 
<input type="radio" name="mgender" value="Female"required> Female </td></tr>
<tr><td>Department:</td><td><select name="gdep" id="span9001"required>
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
<tr><td>Photo:</td><td><input type="file" name="image"required></td></tr>
<tr><td>Graduate ID:</td><td><span id="sprytextfield4">
              <label><input type="text" name="Gid" id="span9001" placeholder="ID_No" size="30"required></label><span class="textfieldRequiredMsg"><br/><b>student ID required</b></span></span></td></tr></table><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button class="btn btn-primary" name="gsub" onClick="validationForm()">&nbsp;REGISTER THIS <br>EMPLOYEE TO VERIFY</button>
<input type="reset" value="CLEAR" class="btn btn-primary" name="gsub"/>
</form>
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
//-->
</script>
</body>
</html>