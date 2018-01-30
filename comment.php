<?php
session_start();
$con=mysqli_connect("localhost","root","","sdl");
echo "$_POST[data]";
$w="insert into comment values('$_SESSION[qid]','101','$_SESSION[u_email]','$_POST[data]')";
if(mysqli_query($con,$w))
{
	header("Location: searched.php");
}
else {
    echo $_SESSION['u_email'];
}	
?>
