<?php session_start();?>
<?php
if(isset($_SESSION["user"]))
{
	$user=$_SESSION["id"];
	$ans=$_POST['ans'];
	$con = mysql_connect("mysql13.000webhost.com","a6044535_admin","7cardinalsins");
if (!$con)
  {
  echo "Connection not established try again";
  }
  mysql_select_db("a6044535_website", $con);
  mysql_query("UPDATE user SET code_stat=1,code_ans="."'".$ans."'"." WHERE id="."'".$user."'");
mysql_close($con);
echo "Result stored contact code masters organizers for further instructions.";
}
else 
echo "Access Denied";
?>