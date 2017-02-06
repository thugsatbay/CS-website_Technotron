<!DOCTYPE html> 
<html>
<head><title>E-Collage</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="../css/masterpage.css" />
<script type="text/javascript" src="../javascript/navbar.js"></script>
<script type="text/javascript">
function des()
{
document.getElementById("text").innerHTML="<b>Description:</b><br><br>It is a team event. Students have to make a collage out of the given images.<br>Students will be provided with theme and 30 pictures.<br> Theme will be provided on the spot.<br>";
}
function req()
{
document.getElementById("text").innerHTML="<b>Requirements:</b><br><br>Digital camera(maximum 14mp)<br>1) Laptop<br>2) Software’s allowed:-Picasa3.0 Adobe photoshop7.0 and lower versions.<br>";
}
function rar()
{
document.getElementById("text").innerHTML="<b>Rules and regulations:</b><br><br>1) Team-2 students<br>2) Entry Fees- Rs.25/- Each student<br>3)Time allotted-1 hour.<br>4)Area-Dit campus</li>";
}
function res()
{
document.getElementById("text").innerHTML="<b>Restrictions:</b><br><br>No downloaded photographsare allowed.<br> Use atleast 15 images";
}
function jc()
{
document.getElementById("text").innerHTML="<b>Judgement criteria:</b><br><br>	1)Creativity <br>	2)Connection with theme";
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
</div><br>
<div style="font-size:15px; margin-left:25px; margin-right:25px; text-align:left; height:300px; font-family:Verdana">
<div style="text-align:center;"><h1>E-collage</h1></div><br><br>
<table align="center" border=2px; style="text-align:center;">
<tr>
<td><button onClick="des()">Description:</button></td>
<td><button onClick="req()">Requirements:</button></td>
<td><button onClick="rar()">Rules and regulations:</button></td>
<td><button onClick="res()">Restrictions:</button></td>
<td><button onClick="jc()">Judgement criteria:</button></td>
</tr>
</table><br><br>
<p id="text"> 
<b>Description:</b><br><br>
It is a team event. Students have to make a collage out of the given images.<br>Students will be provided with theme and 30 pictures.<br> Theme will be provided on the spot.
</p>
</div><br>
<div align="center" style="font-size:15px; margin-left:25px; margin-right:25px; text-align:center; height:200px; font-family:Verdana">
Send us Your E-Collage at ecollage@csi-dit.netai.net or uplaod here.<br>
E-Collage filename must be same as Username.<br><br>
<form action="uploadfile.php" method="post" enctype="multipart/form-data">
File:<input type="file" accept="image/*" name="file" id="file"><br><br>
UserName:<input type="text" name="wuser" id="wuser"><br><br>
<button type="submit">Submit</button>
</form>
</div>
</div>
</body>
</html>