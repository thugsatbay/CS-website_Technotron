<?php
$con = mysql_connect("mysql13.000webhost.com","a6044535_admin","7cardinalsins");
if (!$con)
  {
  echo "Connection not established try again";
  }
  mysql_select_db("a6044535_website", $con);
  $qry="SELECT id,user,password,extra1 FROM user ORDER BY extra1 DESC LIMIT 0 , 30";
  $result = mysql_query($qry);$cnt=0;
while($row = mysql_fetch_array($result))
{$cnt=$cnt+1;
	echo "<h3>".$cnt.") ID = ".$row['id']." , ".$row['user']." , ".$row['password']." ,Marks = ".$row['extra1']."</h3><br><br>";
}
mysql_close($con);
  ?>