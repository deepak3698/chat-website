<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/chat/index.php');
include 'look.php';
$msg=$_POST['text'];
$room=$_POST['room'];
$ip=$_POST['ip'];
$sql="INSERT INTO msg(msgs,room,ip,stime) 
Values('$msg','$room','$ip',CURRENT_TIMESTAMP)";
if(!mysqli_query($con,$sql))
{
	echo "exrror" .mysqli_error($con);
}





?>