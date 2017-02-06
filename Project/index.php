<!DOCTYPE html> 
<html>
<head><title>CSI HOME</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/masterpage.css" />
<style type="text/css">
.leader
{
width:30px;
height:200px;
background-color:#ff7f00;
float:left;
font-size:22px;
padding-left:10px;
}
#box{
margin-left:200px;
width:600px;
height:600px;
max-width:600px;
max-height:600px;
background-repeat:no-repeat;
background-image:url('images/soon.jpg');
border:2px solid #015659;
}
#voc{display:none;}
</style>
<script type="text/javascript">
var status="win",timestamp=0;
$(document).ready(function() {        
	//meaning box static position
	var xxx=Math.floor((screen.width-960)/2) + 230 + 275;
	xxx=xxx.toString()+"px";
	$("#clock").css("position","absolute");
	$("#clock").css("top","695px");
	$("#clock").css("left",xxx);
	//animation fade in fade out
	 $("#wins").mouseenter(function()    {
    	if(timestamp>(new Date().getTime()))	{timestamp-=(new Date().getTime());}	else	{timestamp=0;}
        if((status=="voc"))	{      
        status="win";
        setTimeout(function(){  
        $("#voc").stop();
    	$("#voc").css("display","none");  
    	$("#clock").css("display","none");
    	$("#box").animate({height:0,opacity:0.0},1000);
    	setTimeout(function() {$("#box").animate({height:600,opacity:1.0},1000).css("background-image","url('images/soon.jpg')").css("border","2px solid #015659");$("#clock").delay(700).fadeIn(300);},1000);
        },timestamp);
        timestamp+=(new Date().getTime())+2000;
        }   }); 
    $("#vocs").mouseenter(function()    { 
    	if(timestamp>(new Date().getTime()))	{timestamp-=(new Date().getTime());}	else	{timestamp=0;}
    	if((status=="win"))	{
        status="voc";
        setTimeout(function(){
        $("#clock").css("display","none");
    	$("#box").animate({height:0,opacity:0.0},1000);
    	setTimeout(function() {$("#box").animate({height:600,opacity:1.0},1000).css("background-image","url('images/cubic.jpg')").css("border","2px solid black");},1000);
        $("#voc").delay(2000).fadeIn(0);
        $("#clock").delay(2000).fadeIn(0);
        },timestamp);
        timestamp+=(new Date().getTime())+3000;
        }   });
});
</script>
<script type="text/javascript" src="javascript/navbar.js"></script>
<script type="text/javascript" src="javascript/countdown.js"></script>
<script type="text/javascript">
//word meaning
function ajaxcall()
{	
var table=document.getElementById("voc");
table.rows[0].cells[0].innerHTML="Fetching...";
var random=Math.floor((Math.random()*30));
$.get("wordmeaning.php",{ rand:random },function(data) {
var brk=data.split(",");	
	var row1=table.rows[2];
	row1.cells[0].innerHTML=brk[0];
	row1.cells[1].innerHTML=brk[1];
	table.rows[0].cells[0].innerHTML="<i>Daily Vocabulary</i>";
	});
}
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
<div style="float:left;">
<div class="leader" id="wins">
U<br>P<br>D<br>A<br>T<br>E
</div><br><br><br><br><br><br>
<div class="leader" id="vocs">
V<br>O<br>C<br>A<br>B<br>B
</div>
</div>
<div id="box">
<table border="2px" align="left" cellpadding="5px" id="voc" style="color:#ffffff; font-size:17px; font-family:Verdana; vertical-align:middle; text-align:center; position:relative; top:7px; left:7px; ">
<tr><td colspan="2"><i>Daily Vocabulary</i></td></tr>
<tr> <th>Word</th> <th>Meaning</th> </tr>
<tr> <td>Word</td> <td>Meaning</td> </tr>
<tr><td colspan="2"><button type="button" onClick="ajaxcall()">Fetch A New Word</button></td> </tr>
</table>
<table border=1px; cellpadding="5px" id="clock" style="color:#ffffff;  font-size:25px; text-align:center; font-family: Verdana; vertical-align:middle;">
<tr><td></td><td style="text-decoration:blink;">:</td><td></td><td style="text-decoration:blink;">:</td><td></td><td style="text-decoration:blink;">:</td><td></td></tr>
<tr style="font-style:italic; font-size:17px;"><td>Days</td><td>,</td><td>Hrs</td><td>,</td><td>Mins</td><td>,</td><td>Secs</td></tr>
<tr><td style="font-size:15px;" colspan="7">Into the Techfest</td></tr>
</table>
</div>
<p id="notify" align="center" style="margin-bottom:0px; margin-top:40px;"><i style="font-size:15px; font-family:Verdana;  text-align:center;">Website best viewed on Mozilla 5.0+ and IE6+. For best viewing experience please allow the complete website to load.</i></p>
<div style="display:none;">
<script language="JavaScript" src="http://www.counter160.com/js.js?img=11"></script><br><a href="http://www.000webhost.com"><img src="http://www.counter160.com/images/11/left.png" alt="Free web hosting" border="0" ></a><a href="http://www.hosting24.com"><img alt="Web hosting" src="http://www.counter160.com/images/11/right.png" border="0"></a>
</div>
</div>
</body>
</html>