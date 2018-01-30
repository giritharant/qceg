<?php
session_start();
$con=mysqli_connect("localhost","root","","sdl");
$w="insert into user values('$_POST[name]','$_POST[rollno]','$_POST[batch]','$_POST[year]','$_POST[contact]','$_POST[email]','$_POST[password]')";
if(mysqli_query($con,$w))
{
	echo "<script>alert('Sucessfully Registered!!');
	window.location.href='login.html';
	</script>";
}
else {
	echo "<script>alert('Registration unsuccessful!!');
	window.location.href='signup.html';
	</script>";
}
?>
