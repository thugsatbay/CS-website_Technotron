<?php session_start();?>
<?php 
if(isset($_POST["user"]))
   {
$user=$_POST["user"];
$pass=$_POST["pass"];
$adminpass=$_POST["adminpass"];
$con = mysql_connect("mysql13.000webhost.com","a6044535_admin","7cardinalsins");
if (!$con)
  {
  echo "Connection not established try again";
  }
  mysql_select_db("a6044535_website", $con);
$qry="SELECT password,id,code_stat FROM user WHERE user="."'".$user."'";
$result = mysql_query($qry);
$row = mysql_fetch_array($result);
$chckpass=$row['password'];
mysql_close($con);  
if($row['code_stat']==1)
{echo "Test Already given"; }
else if(($chckpass==$pass)&&($adminpass=="csi_csi"))
{$_SESSION["user"]=$user;$_SESSION["id"]=$row['id'];
echo "Successful login".$_SESSION["user"];}
else 
{echo "Unsuccessful login";}
}
else 
echo "Access Denied";
?>
