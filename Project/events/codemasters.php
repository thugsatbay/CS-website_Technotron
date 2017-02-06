<!DOCTYPE html> 
<html>
<head><title>CSI HOME</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/masterpage.css" />
<script type="text/javascript" src="../javascript/navbar.js"></script>
<script type="text/javascript">
function des()
{
document.getElementById("text").innerHTML="<b>Coding Masters :</b><br><br>The ultimate C challenge is at your doorstep. If you think you are a hotshot at programming and are a killer with functions, classes and objects. Then look no more friend for your search is over.<br>Makrand Sethi - 9760757779<br>Gurleen Singh - 9997770277";
}
function req()
{
document.getElementById("text").innerHTML="<b>Requirements:</b><br><br>Basic knowledge of programming language C";
}
function rar()
{
document.getElementById("text").innerHTML="<b>Rules and regulations:</b><br><br>1) Online contest on 12 April 2012<br>2) Time- 12 to 2p.m<br>3)Entry fees- 10Rs<br>4)Duration 1 hr 5min";
}
function prz()
{
document.getElementById("text").innerHTML="<b>Prizes:</b><br><br>1)	Certificates to all students qualifying Round 2.<br>2)	Books to top 3 students.";
}
</script>
</head>
<body>
<div id="page">
<img alt="" src="../masterpagephotos/csi-web.png" id="image">
<img alt="" src="../masterpagephotos/dit.png" id="image1" style=" position:relaive; top:-25px;">
<div id="navbar">
<ul>
<li id="home"><a href="../index.php">Home</a></li>
<li id="csi"><a href="../csi.php">CSI</a></li>
<li id="apt"><a href="../fest.php">Fest Events</a></li>
<li id="us"><a href="../us.php">About Us</a></li>
</ul>
</div>
<br>
<div style="font-size:15px; margin-left:25px; margin-right:25px; text-align:left; height:300px; font-family:Verdana">
<div style="text-align:center;"><h1>Coding Masters</h1></div><br><br>
<table align="center" border=2px; style="text-align:center;">
<tr>
<td><button onClick="des()">Description:</button></td>
<td><button onClick="req()">Requirements:</button></td>
<td><button onClick="rar()">Rules and regulations:</button></td>
<td><button onClick="prz()">Prizes</button></td>
</tr>
</table><br><br>
<p id="text"> 
<b>Coding Masters :</b><br><br>The ultimate C challenge is at your doorstep. If you think you are a hotshot at programming and are a killer with functions, classes and objects. Then look no more friend for your search is over.<br>Makrand Sethi - 9760757779<br>Gurleen Singh - 9997770277</p>
</div><br><br>
<div align="center" style="font-size:15px; margin-left:25px; margin-right:25px; text-align:center; height:200px; font-family:Verdana">
<ul>
<li>Click The 'I Am A Code Master' Button To Begin Test.</li>
<li>The Test will be 1 hr 5min long.</li>
<li>Once the is test started it can't be rescheduled.</li>
<li>There are 30 basic objective questions based on C programming language.</li>
<li>Make sure to submit the test before leaving the lab.</li>
<li>The results will be declared on 13 April and round two will be held on 14</li>
<li>Best of Luck!</li>
</ul>
<form action="login.php" method="post" >
<button type="submit">I Am A Code Master</button>
</form>
</div>
</div>
</body>
</html>