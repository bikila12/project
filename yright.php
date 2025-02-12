<script src="SpryAssets/SpryValidationTextField.js" type="text/javascript"></script>
<link href="SpryAssets/SpryValidationTextField.css" rel="stylesheet" type="text/css">
<form name="forma" method="POST" id ="form" align="center">
<table border=0 cellpadding=5px cellspacing=5px width=290px height=300px bgcolor="#FFCCFF" align="center">
  <tr><td align="center" bgcolor="#FFCCCC">LOG IN HERE</td></tr>
  <tr><td>USER NAME:</td></tr>
<tr><td><span id="sprytextfield1">
              <label> <input type="text"  name="uname" class="user_name_hover" id="span9001" placeholder="User Name" size="30" ></label><span class="textfieldRequiredMsg"><br/><b>User name required</b></span></span></td></tr><br>
<tr><td>PASSWORD:</td></tr><br>
<tr><td><span id="sprytextfield2">
              <label> <input type="password"  name="pword" class="user_name_hover" id="span9001" placeholder="Password" size="30" >     </label><span class="textfieldRequiredMsg"><br/><b>Password required</b></span></span></td></tr>
<tr><td>Role: </td></tr>
 <tr><td><select name="selectop" id="span9001" >
<option>--select one--</option>
<option>Administrator</option>
<option>Registerar</option>
<option>finance</option>
 </select></td></tr>
 <tr><td> </td></tr>
<tr><td> </td></tr>
<tr><td> </td></tr>
 <tr><td> </td></tr>
 <tr>
<td><input type="submit" name="Login" value="LOGIN" class="btn btn-primary" name="gsub"/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="reset" value="CLEAR" class="btn btn-primary" name="gsub""/></td>
</tr>
<tr>
<td bgcolor="#bb9955">&nbsp;&nbsp;
</td>
</tr>
</table>
</form>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<SCRIPT LANGUAGE="JavaScript">
var timee;
function stopClock(){
clearTimeout(timee);
}
function yourClock(){
var nd = new Date();
var h, m, s;
var time=" ";
h = nd.getHours();
m = nd.getMinutes();
s = nd.getSeconds();
if (s <=9) s="0" + s;
if (m <=9) m="0" + m;
if (h <=9) h="0" + h;
time+=h+":"+m+":"+s;
document.the_clock.the_time.value=time;
timee=setTimeout("yourClock()",1000);
}
</SCRIPT>
</head>
<body bgcolor="#7aa" onLoad="yourClock()", onUnload="stopClock(); return true"> 
<form name="the_clock">
  <input type="text" name="the_time" size="36" style="padding-bottom:10px;" />
</form>
<script LANGUAGE="JavaScript">
monthnames = new Array("January","Februrary","March","April","May","June","July","August","September","October","November","Decemeber");
var linkcount=0;
function addlink(month, day, href) {
var entry = new Array(3);
entry[0] = month;
entry[1] = day;
entry[2] = href;
this[linkcount++] = entry;
}
Array.prototype.addlink = addlink;
linkdays = new Array();
monthdays = new Array(12);
monthdays[0]=31;
monthdays[1]=28;
monthdays[2]=31;
monthdays[3]=30;
monthdays[4]=31;
monthdays[5]=30;
monthdays[6]=31;
monthdays[7]=31;
monthdays[8]=30;
monthdays[9]=31;
monthdays[10]=30;
monthdays[11]=31;
todayDate=new Date();
thisday=todayDate.getDay();
thismonth=todayDate.getMonth();
thisdate=todayDate.getDate();
thisyear=todayDate.getYear();
thisyear = thisyear % 100;
thisyear = ((thisyear < 50) ? (2000 + thisyear) : (1900 + thisyear));
if (((thisyear % 4 == 0) 
&& !(thisyear % 100 == 0))
||(thisyear % 400 == 0)) monthdays[1]++;
startspaces=thisdate;
while (startspaces > 7) startspaces-=7;
startspaces = thisday - startspaces + 1;
if (startspaces < 0) startspaces+=7;
document.write("<table border=0 bgcolor=#66CCFF width=240 height=210");
document.write("bordercolor=black><font color=black>");
document.write("<tr><td colspan=7><center><strong>" 
+ monthnames[thismonth] + " " + thisyear 
+ "</strong></center></font></td></tr>");
document.write("<tr>");
document.write("<td align=center>Su </td>");
document.write("<td align=center>M</td>");
document.write("<td align=center>Tu</td>");
document.write("<td align=center>W</td>");
document.write("<td align=center>Th</td>");
document.write("<td align=center>F</td>");
document.write("<td align=center>Sa</td>"); 
document.write("</tr>");
document.write("<tr>");
for (s=0;s<startspaces;s++) {
document.write("<td> </td>");
}
count=1;
while (count <= monthdays[thismonth]) {
for (b = startspaces;b<7;b++) {
linktrue=false;
document.write("<td>");
for (c=0;c<linkdays.length;c++) {
if (linkdays[c] != null) {
if ((linkdays[c][0]==thismonth + 1) && (linkdays[c][1]==count)) {
document.write("<a href=\"" + linkdays[c][2] + "\">");
linktrue=true;
      }
   }
}
if (count==thisdate) {
document.write("<font color='FF0000'><strong>");
}
if (count <= monthdays[thismonth]) {
document.write(count);
}
else {
document.write(" ");
}
if (count==thisdate) {
document.write("</strong></font>");
}
if (linktrue)
document.write("</a>");
document.write("</td>");
count++;
}
document.write("</tr>");
document.write("<tr>");
startspaces=0;
}
document.write("</table></p>");
</script>
<script type="text/javascript">
<!--
var sprytextfield1 = new Spry.Widget.ValidationTextField("sprytextfield1");
var sprytextfield2 = new Spry.Widget.ValidationTextField("sprytextfield2");
//-->
</script>