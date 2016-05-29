<?php
$con = mysql_connect("localhost","root","123456");
if (!$con)
  {
  die('Could not connect: ' . mysql_error());
  }
mysql_select_db("my_db", $con);
$name=$_POST['user'];
$result = mysql_query("SELECT Password FROM info WHERE Name='$name' ",$con);
$row = mysql_fetch_array($result);
$password_db=$row['Password'] ;
if($password_db==""){
	echo "<h1>Wrong account</h1>";
	header("Refresh:0.5;url=http://localhost/RFID/login.html");
	exit;
}
else if($password_db==$_POST['password']){
	session_start();
    //  注册登陆成功的 admin 变量，并赋值 true
    $_SESSION["admin"] = true;
    $_SESSION["user"] = $_POST['user'];
	header("location: http://localhost/RFID/home.php");
	exit;
}
else{
	echo "<h1>Password wrong</h1>";
	header("Refresh:0.5;url=http://localhost/RFID/login.html");
	exit;
}	
mysql_close($con)
?>