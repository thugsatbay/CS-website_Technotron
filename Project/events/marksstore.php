<?php
$con = mysql_connect("mysql13.000webhost.com","a6044535_admin","7cardinalsins");
if (!$con)
  {
  echo "Connection not established try again";
  }
  mysql_select_db("a6044535_website", $con);
  $qry="SELECT code_ans,id FROM user WHERE code_stat='1'";
	$answer="4,4,2,1,2,4,3,4,2,1,1,2,4,2,1,3,3,1,4,1,4,4,4,1,1,1,3,1,3,1";
    $score=1;
	$result = mysql_query($qry);
while($row = mysql_fetch_array($result))
  {
  $str=$row['code_ans'];
  for($x=1;$x<60;$x+=2)
  {     
  	if($answer[x]==$str[x]){$score+=1;}
  }
  echo $row."=".$score."<br>";
  $score=0;
  }
 ?> 