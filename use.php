<?php
session_start();
$_SESSION['k']="welcome";
$room=$_POST['room'];
if(strlen($room)>20 or strlen($room)<2)
{
	$m="please choose character between 2 to 20";
	echo '<script language="javascript">';
	echo 'alert("'.$m.'");';
	echo 'window.location="http://localhost/chat";';
	echo '</script>';
}
else if(!ctype_alnum($room))
{
		$m="please enter a valid name";
	echo '<script language="javascript">';
	echo 'alert("'.$m.'");';
	echo 'window.location="http://localhost/chat";';
	echo '</script>';
}
else{
	include 'look.php';
}
$sql="SELECT * FROM `rooms` WHERE roomname='$room'";
$result=mysqli_query($con,$sql);
if($result)
{
	if(mysqli_num_rows($result)>0)
	{
		$m="your room is already claimed";
	echo '<script language="javascript">';
	echo 'alert("'.$m.'");';
	echo 'window.location="http://localhost/chat";';
	echo '</script>';
	}
	else{
		$sql="INSERT INTO `rooms` (`roomname`, `stime`) VALUES ( '$room', CURRENT_TIMESTAMP)";
		   if(mysqli_query($con,$sql))
		     {
	$m="chat here";
	echo '<script language="javascript">';
	echo 'alert("'.$m.'");';
	echo 'window.location="http://localhost/chat/rooms.php?roomname=' .$room. '";';
	echo '</script>';
             }
		}
		
}
else{
	echo "error" .mysqli_error($con);
}

?>