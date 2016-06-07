<?php
header("Access-Control-Allow-Origin:*");
$con = mysql_connect('localhost', 'root', '123456');
if (!$con)
{
   die('Could not connect: ' . mysql_error());
}
mysql_select_db("my_db", $con);

$sql="SELECT * FROM persons";

$result = mysql_query($sql);
while($row = mysql_fetch_array($result))
{
   echo $row['ID']."  ";
   echo $row['NAME']."  ";
   echo $row['PART']."  ";
   echo $row['TEL']."   ";
}

mysql_close($con);
?>
