<!DOCTYPE html> 
<html>
<head><title>Login</title>
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript">
function checknew()
{
var x=document.getElementById("nwu").value;
var xx=document.getElementById("nps").value;
var xxx=document.getElementById("npsa").value;
if(x=="New Username")
{alert("Not a acceptable user name");return false;}
else if((x.length<=5)||(x==""))
{alert("Username too short");return false;}
else if(xx!=xxx)
{alert("Mobile no. does not match");return false;}
else if((xx.length!=10)||(xx==""))
{alert("Mobile No. must be 10 digit long");return false;}
else if((isNaN(xx))||xx.indexOf(" ")!=-1)
{alert("Mobile No. is incorrect, please enter a valid mobile no.");return false;}
else {return true;}
}
function checklog()
{
var x=document.getElementById("user").value;
var xx=document.getElementById("pass").value;
var xxx=document.getElementById("adminpass").value;
if(x=="Username")
{alert("Not a acceptable user name");return false;}
else if((x.length<=5)||(x==""))
{alert("Username too short");return false;}
else if((xx.length!=10)||(xx==""))
{alert("Mobile No. must be 10 digit long");return false;}
else if((isNaN(xx))||xx.indexOf(" ")!=-1)
{alert("Mobile No. is incorrect, please enter a valid mobile no.");return false;}
else 
{var jojojo;
$.post("codemasterentry.php",{user:x,pass:xx,adminpass:xxx},function(data) 
		{jojojo=data.split(" ");
		if(jojojo[0].charAt(0)=='S')
			{alert("Succesful login you will be redirected to question paper");window.location.href="online/code.php";}
		else {alert(data+". Try Again by reloading the page");}
		});
return false;
}
}
</script>

<style type="text/css">
body
{
background-color:#000000;
}
#user,#nwu
{
width:300px;height:20px;
text-align:center;
font-size:17px;
color:#CCCCCC;
padding:5px 5px 5px 5px;
border:2px solid #cccccc;
}
#pass,#nps,#npsa,#adminpass
{
width:300px;height:20px;
font-size:15px;
text-align:center;
color:#CCCCCC;
padding:5px 5px 5px 5px;
border:2px solid #cccccc;
}
#login
{
width:90px;
height:90px;
}
#create
{display:none;}
</style>
<script type="text/javascript">
$(document).ready(function()
		{
	var myHeight;
	if( typeof( window.innerWidth ) == 'number' ) {   //Non-IE 
	myHeight = window.innerHeight; 
	}
	 else { //IE
	myHeight = document.documentElement.clientHeight; 
	 }
	$("body").css("height",myHeight);
	$("body").css("max-height",myHeight);
	$("body").css("width",screen.width);
	$("#log").css("margin","auto");
	$("#create").css("margin","auto");
	$("#login").mouseenter(function(){
		$("#login").attr("src","../images/glow.png"); });
	$("#login").mouseleave(function(){
		$("#login").attr("src","../images/start.png"); });
	$("#login1").mouseenter(function(){
		$("#login1").attr("src","../images/glow.png"); });
	$("#login1").mouseleave(function(){
		$("#login1").attr("src","../images/start.png"); });
	$("#user").click(function() {
		$("#user").val("");
		$("#user").css("color","#000000");});
	$("#pass").click(function() {
		$("#pass").val("");
		$("#pass").css("color","#000000");});
	$("#nwu").click(function() {
		$("#nwu").val("");
		$("#nwu").css("color","#000000");});
	$("#nps").click(function() {
		$("#nps").val("");
		$("#nps").css("color","#000000");});
	$("#npsa").click(function() {
		$("#npsa").val("");
		$("#npsa").css("color","#000000");});
	$("#adminpass").click(function() {
		$("#adminpass").val("");
		$("#adminpass").css("color","#000000");});
	$("#signup").click(function() {
		$("#log").css("display","none");
		$("#create").css("display","inherit");
		$("#nwu").val("New Username");
		$("#nps").val("Mobile No.");
		$("#npsa").val("Repeat Mobile No.");
		$("#nwu,#nps,#npsa").css("color","#CCCCCC");});	
	$("#change").click(function() {
		$("#create").css("display","none");
		$("#log").css("display","inherit");
		$("#user").val("Username");
		$("#pass").val("Mobile No.");
		$("#adminpass").val("SuperAdmin Password");
		$("#user,#pass,#adminpass").css("color","#CCCCCC");});
	});
</script>
</head>
<body>
<div id="log" align="center" style="font-family:Verdana; width:350px;">
<fieldset ><legend style="padding:0px 3px 0px 3px; margin-left:10px; color:#ffffff;">Login :</legend>
<form action="online/code.php" onsubmit="return checklog();" method="post" style="padding:10px;">
<input id="user" name="user" value="Username" type="text" maxlength="50"/><br>
<input type="image" id="login" src="../images/start.png"><br>
<input id="pass" name="pass" value="Mobile No." type="text" maxlength="10"/> <br><br>
<input id="adminpass" name="adminpass" value="SuperAdmin Password" type="text" maxlength="15" />
</form></fieldset><br>
<p align="center" id="para" style="color:#ffffff; font-size:16px;"><b>Note:)</b> The password is your Mobile Number. Click The Log Button to Sign In.</p>
<div align="center"><button style="color:#000000;"  id="signup" type="button">Sign Up</button></div>
</div>
<div id="create" align="center" style="font-family:Verdana; width:350px;">
<fieldset ><legend style="padding:0px 3px 0px 3px; margin-left:10px; color:#ffffff;">New User :</legend>
<form id="createform" action="databasenewuser.php" onsubmit="return checknew();" method="post" style="padding:10px;">
<input id="nwu" name="nwu" value="New Username" name="nwu" type="text" maxlength="50"/><br>
<input type="image" id="login1" src="../images/start.png" ><br> 
<input id="nps" name="nps" value="Mobile No." type="text" maxlength="10" /> <br><br>
<input id="npsa" value="Repeat Mobile No." type="text" maxlength="10" /> 
</form></fieldset>
<p align="center" id="para" style="color:#ffffff; font-size:16px;"><b>Note:)</b> Click the log button to Sign Up. </p>
<div align="center"><button style="color:#000000;" id="change" type="button">Login</button></div>
</div>
</body>
</html>