<!DOCTYPE html> 
<html>
<head><title>Technotron</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/masterpage.css"/>
<link rel="stylesheet" type="text/css" href="css/techfestslide.css"/>
<script type="text/javascript" src="javascript/navbar.js"></script>
<script type="text/javascript" src="javascript/navcycler.js"></script>
<script type="text/javascript" src="javascript/navevents.js"></script>
<script type="text/javascript">
$(document).ready(function(){
	$('#ani').live('dblclick', function() {
alert("Contact Help Desk Outside Cafet");
		});
	$('#bui').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
	$('#cm').live('dblclick', function() {
		$("#cm").attr("target","_blank");
	       $("#cm").attr("href","events/codemasters.php");
		});
	$('#ctc').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
	$('#deb').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
	$('#eco').live('dblclick', function() {
       $("#eco").attr("target","_blank");
       $("#eco").attr("href","events/E-Collage.php");
		});
	$('#gam').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
	$('#pp').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
	$('#pt').live('dblclick', function() {
	});
	$('#qb').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
	$('#jw').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
	$('#th').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
	$('#wom').live('dblclick', function() {
	});
	$('#tec').live('dblclick', function() {
		alert("TechFest Hosted By CSI-DIT, Website Created By Gurleen Singh & Makrand Sethi");});
	$('#fo').live('dblclick', function() {
		alert("Contact Help Desk Outside Cafet");});
});
</script>
</head>
<body>
<div id="page">
<img alt="" src="masterpagephotos/csi-web.png" id="image">
<img alt="" src="masterpagephotos/dit.png" id="image1" style=" position:relaive; top:-25px;">
<div id="navbar">
<ul>
<li id="home"><a href="index.php">Home</a></li>
<li id="csi"><a href="csi.php">CSI</a></li>
<li id="apt"><a href="fest.php">Fest Events</a></li>
<li id="us"><a href="us.php">About Us</a></li>
</ul>
</div>
<br><br>
<div id="list" style="border:3px solid #666666;">
    <ul>
        <li><a id="ani" href="#dtext">Animation</a></li>
        <li><a id="bui" href="#dtext">Buisness</a></li>
        <li><a id="cm" href="#dtext">Coding Masters</a></li>
        <li><a id="ctc" href="#dtext">Crack The Code</a></li>
        <li><a id="deb" href="#dtext">Debate</a></li>
        <li><a id="eco" href="#dtext">E-Collage</a></li>
        <li><a id="fo" href="#dtext">Figure Out</a></li>
        <li><a id="gam" href="#dtext">Gamerz</a></li>
        <li><a id="jw" href="#dtext">Junkyard Wars</a></li>
        <li><a id="pp" href="#dtext">Paper Presentation</a></li>
        <li><a id="pt" href="#dtext">Puzzle Trap</a></li>
        <li><a id="qb" href="#dtext">Quiz Bowl</a></li>
        <li><a id="tl" href="#dtext">Technical Lectures</a></li>
        <li><a id="wom" href="#dtext">Web O' Mania</a></li>
        <li><a id="tec" href="#dtext">Technotron</a></li>
    </ul>
</div>
<div style="margin:0px; margin-left:20px; margin-right:20px; margin-top:10px; font-size:20px; font-family:Arial,sans-serif; ">
<p id="dtext" align="justify"><b>Welcome to the events of Technotron. To view the details of the events single click on them.<br><i><u>To read further about a particular event double click it.</u></i></b></p>
</div>
</div>
</body>
</html>