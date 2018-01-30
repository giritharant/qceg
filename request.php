<?php
    session_start();
$con=mysqli_connect("localhost","root","","sdl");
$name=$_POST['sem'].$_POST['sub'].$_POST['year'].$_POST['type'].$_POST['batch'];
$w="insert into request values('$_SESSION[u_email]','$name',0)";
if(mysqli_query($con,$w))
{
	header("Location: index.php");
}
else {
    echo $_SESSION['u_email'];
}	
    
?>