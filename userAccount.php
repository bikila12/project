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
<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript">
<!--
function validationForm() {
var sop=document.forma.selectop.value
var ua=document.forma.uaccount.value
var pa=document.forma.pass.value
var nua=document.forma.nuaccount.value
var np=document.forma.npass.value
var ncp=document.forma.ncpass.value
 if (sop=="--select one--")
{
window.alert("please select user account type");
return false;
}
else if (ua=="")
{
window.alert("please insert saved user name");
return false;
}
else if (isNaN(ua)==false)
{
window.alert("saved user name is not number");
return false;
}
else if (pa=="")
{
window.alert("please insert saved password ");
return false;
}
else if (nua=="")
{
window.alert("please insert new user name");
return false;
}
else if (isNaN(nua)==false)
{
window.alert("new user name is not number");
return false;
}
 else if(np=="")
{
window.alert("please insert new password");
return false;
}
 else if(ncp=="")
{
window.alert("please confirm new password");
return false;
}
}
//>
</script>
<title>
Adminstrator page
</title>
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
<h3>Change User Name and Password</h3>
<form action="createaccpro.php" method="post" name="forma">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table cellspacing="5" cellpadding="10" >
<tr><td align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Choose Account:</td><td>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<select name="selectop" id="span9001">
<option>--select one--</option>
<option>Administrator</option>
<option>Registerar</option>
</select></td></tr>
<tr><td colspan="2"></td></tr>
<tr><th colspan="2" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter Saved Account</th></tr>
<tr><td colspan="2"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield1">
              <label><input type="text" name="uaccount" id="span9001" placeholder="Saved User Name" size="30"/></label><span class="textfieldRequiredMsg"><b>Saved User Name required</b></span></span></td></tr>
<tr><td colspan="2"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield2">
              <label><input type="password" name="pass" id="span9001" placeholder="Saved password" size="30"/></label><span class="textfieldRequiredMsg"><b>Saved Password required</b></span></span></td></tr>
<tr><td colspan="2"></td></tr>
<tr><th colspan="2" align="center">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Enter New Account</th></tr>
<tr><td colspan="2"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;User Name:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield3">
              <label><input type="text" name="nuaccount" id="span9001" placeholder="New User Name" size="30"/></label><span class="textfieldRequiredMsg"><b>New User Name required</b></span></span></td></tr>
<tr><td colspan="2"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Password:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield4">
              <label><input type="password" name="npass" id="span9001" placeholder="New Password" size="30"/></label><span class="textfieldRequiredMsg"><b>New password required</b></span></span></td></tr>
<tr><td colspan="2"></td></tr>
<tr><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Confirm Password:</td><td>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span id="sprytextfield5">
              <label><input type="password" name="ncpass" id="span9001" placeholder="Confirm New Password" size="30"/></label><span class="textfieldRequiredMsg"><b>Confirm New Password required</b></span></span></td></tr>
<tr><td colspan="2"></td></tr>
</table>
<button class="btn btn-primary" name="sacc" onClick="validationForm()">&nbsp;Create Account</button>
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
var sprytextfield5 = new Spry.Widget.ValidationTextField("sprytextfield5");
//-->
</script>
</body>
</html>
<?php
}
?>