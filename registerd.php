<?php
session_start();
$con=mysqli_connect("localhost","root","","sdl");
$w="insert into qdonor values('$_SESSION[u_name]','$_SESSION[u_email]')";
if(mysqli_query($con,$w))
{
	echo "<script>alert('Sucessfully Registered!!');
	window.location.href='upload.php';
	</script>";
}
else {
    echo $_SESSION['u_email'];
}	
?>
