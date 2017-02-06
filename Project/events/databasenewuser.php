<html>
<head>
</head>
<body>
<?php
$con = mysql_connect("mysql13.000webhost.com","a6044535_admin","7cardinalsins");
$status="Continue";
if (!$con)
  {
  echo "<h1>Connection not established try again</h1>";
  }
  else if(isset($_POST["nwu"]))
   {
  $user=$_POST["nwu"];	
  $mob=$_POST["nps"];	
 mysql_select_db("a6044535_website", $con);
 $sql="INSERT INTO user (user,password,code_ans,puzz_ans,extra0,extra1)VALUES('$user','$mob',NULL,NULL,NULL,NULL)"; 	
  } 
if (!mysql_query($sql,$con))
{echo("<h1>".'Error: ' . mysql_error()." Or Access Denied"."</h1>");} 
else
{echo "<h1>Congratulation you have successfully registered with CSI</h1>";}
mysql_close($con);
?>
<br>
<h2>You will be redirected to login page after 10 seconds</h2>
<script type="text/javascript">
setTimeout(function() { 
alert("You are now going to be redirected to login page, log in there to start your respective competition");
window.history.back(-1);},10000);
</script>
</body>
</html>