<?php
$username=$_POST['user'];
$password=$_POST['pass'];



$connect=@mysql_connect('localhost','root','');
mysql_select_db("myproject");
$result=mysql_query("select * from studentdb where username='$username' and password='$password'") or die("failed to connect".mysql_error());
$row=mysql_fetch_array($result);
if ($row['username']==$username && $row['password']==$password) {
if($username=="aje" && $password=="aje"){
	include("home.php");
}
else
{
 include("homecopy.php");
}
}else{
	include("index.php ");
echo "failed to login";
}

?>