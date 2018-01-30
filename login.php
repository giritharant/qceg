<?php
$con=mysqli_connect("localhost","root","","sdl");
$user_email=$_POST['email'];
$user_password=$_POST['password'];
$select="select * from user where email='$_POST[email]' and password='$_POST[password]'";
$store=mysqli_query($con,$select);
$log=mysqli_fetch_array($store);
if($log['name'])
{
	
	session_start();
	//echo $log['user_name'];
	$_SESSION["u_name"]=$log['name'];
    $_SESSION["u_email"]=$log['email'];
	header('location:index.php');
}
else 
{
	session_start();
	$_SESSION["error"]=1;
	header('location:login.html');
	
}

?>
