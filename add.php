<?php
$con = mysql_connect("localhost","root","123456");
if (!$con)
{
	die('Could not connect: ' . mysql_error());
}
mysql_select_db("my_db", $con);
$sql="INSERT INTO Persons (ID, NAME, PART,TEL)
VALUES
('$_POST[ID]','$_POST[NAME]','$_POST[PART]','$_POST[TEL]')";

mysql_query($sql,$con);
header("Refresh:0.5;url=http://localhost/RFID/home.php");

mysql_close($con)
?>