<?php
$con=mysqli_connect('localhost','root','');


mysqli_select_db($con,'chat');

if(!$con)
{
	die("failed to connect" . mysqli_connect_error());
}
?>