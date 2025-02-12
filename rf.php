<html>
<head>
<link href="good.css" rel="stylesheet" type="text/css"/>
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryValidationTextarea.css" rel="stylesheet" type="text/css" />
<script src="SpryAssets/SpryValidationTextarea.js" type="text/javascript"></script>
<script type="text/javascript" src="js/jquery.js"></script>
<link href="css/datepicker/ui.datepicker.css" type="text/css" rel="stylesheet"/>
<script type="text/javascript" src="js/datepicker/ui.datepicker.js"></script>
<!--datepicker -->
<script type="text/javascript" charset="utf-8">
jQuery(function($){
$(".date").datepicker();
});
</script>
<script type="text/javascript">
<!--
function validationForm() {
var ph=document.forma.cphone.value
var id=document.forma.Gid.value
var cn=document.forma.cname.value
var ce=document.forma.cemail.value
var cc=document.forma.ccountry.value
var cci=document.forma.ccity.value
var da=document.forma.date.value
var ro=document.forma.rov.value
var atpos=ce.indexOf("@");
var dotpos=ce.lastIndexOf(".");
 if(id=="")
{
window.alert("Graduate ID can not left blank");
return false;
}
else if (ph=="")
{
window.alert("Compay phone can not left blank");
return false;
}
else if (isNaN(ph))
{
window.alert("Company phone Must be number");
return false;
}
else if (cn=="")
{
window.alert("Company Name can not left blank");
return false;
}
else if (isNaN(cn)==false)
{
window.alert("Company Name can not be number");
return false;
}
else if (ce=="")
{
window.alert("Company Email can not left blank");
return false;
}
else if (atpos<1||dotpos<atpos+2||dotpos+2>=ce.length)
{
window.alert("Not a valid email address");
return false;
}
else if (cc=="--select one--")
{
window.alert("Select Company country");
return false;
}
else if (cci=="--select one--")
{
window.alert("select Company city");
return false;
}
else if (da=="")
{
window.alert("date can not left blank");
return false;
}
else if (ro=="")
{
window.alert("reason of verification can not left blank");
return false;
}
else 
{
window.alert("Company registered successfully!");
}
}
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
<div id ="p">
  <img src="iterfaceimage/regcompa.jpg" width="370" height="300"/>
  <p align="center"><font size="5" color="green"><strong>WELCOME TO JINKA UNIVERSITY ONLINE GRADUATE CREDENTIAL VERIFICATION SYSTEMS</strong></font><font size="4" color=""><br><hr>Every company who wants to employee our graduates can verify their credentials by registering both Company (A place where students graduated from jinka University to be work in) and <a href="employeform.php"><font color="green">EMPLOYEE </font></a>(Graduated students from jinka University to be employed)</p></div>
<div id="rf">
<h4>Company Registration Form:</h4>
<form name="forma" action="insertCompanyData.php" method="post" >
<table cellspacing="20" cellpadding="10" bgcolor="#99CCCC">
<tr><td>Graduate ID:</td><td><span id="sprytextfield1">
              <label><input type="text" name="Gid" id="span9001" placeholder="Employe ID_No" size="30" required></label><span class="textfieldRequiredMsg"><br/><b>User name required</b></span></span></td></tr>
<tr><td>Company Phone:</td><td><span id="sprytextfield2">
              <label><input type="text" name="cphone" id="span9001" placeholder="Company Phone" size="30" required></label><span class="textfieldRequiredMsg"><br/><b>Company Phone required</b></span></span></td></tr>
<tr><td>Company Name:</td><td><span id="sprytextfield3">
              <label><input type="text" name="cname" id="span9001" placeholder="Company Name" size="30"required></label><span class="textfieldRequiredMsg"><br/><b>Company Name required</b></span></span></td></tr>
<tr><td>Company Email:</td><td><span id="sprytextfield4">
              <label><input type="email" name="cemail" id="span9001" placeholder="Company Email" size="30"required></label><span class="textfieldRequiredMsg"><br/><b>Company Email required</b></span></span></td></tr>
<tr><td>Company Region:</td><td><select name="ccountry" id="span9001"required>
<option>--select One--</option>
<option>Oromiya</option>
<option>Amhara</option>
<option>Benishan Gul</option>
<option>Gambela</option>
<option>Harare</option>
<option>afaar</option>
<option>SNNPR</option>
<option>Somale</option>
<option>Tigray</option>
</select></td></tr>
<tr><td>Company City:</td><td><select name="ccity" id="span9001"required>
<option>--select one--</option>
<option>Semira</option>
<option>Bahir Dar</option>
<option>Asossa</option>
<option>Gambela</option>
<option>Harar</option>
<option>Finfine</option>
<option>Hawassa</option>
<option>Asossa</option>
<option>Jigjiga</option>
<option>Mekelle</option>
</select></td></tr>
<tr><td>Date:</td><td><input type="text" name="date" id="span9001" class="date" placeholder="Date" size="30" required></td></tr>
<tr><td>Reason of Verification:</td><td><span id="sprytextarea1">
                              <label><span id="sprytextarea1">
                              <textarea name="rov" rows="5" cols="21"required ></textarea>
                              </span></label>
                            <span class="textareaRequiredMsg"><br>Please write Reason of Verification.</span></span></td>
</tr></table>
<br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="submit" name="em" class="btn btn-primary" value="REGISTER COMPANY" onClick="validationForm()">
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
var sprytextarea1 = new Spry.Widget.ValidationTextarea("sprytextarea1");
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
var sprytextfield3 = new Spry.Widget.ValidationTextField("sprytextfield3");
var sprytextfield4 = new Spry.Widget.ValidationTextField("sprytextfield4");
//-->
</script>
</body>
</html>