<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/chat/index.php');
include 'look.php';
$room=$_POST['room'];
$sql="SELECT msgs,ip,stime FROM `msg` WHERE room='$room'";
$res=" ";
$result=mysqli_query($con,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		$res=$res.'<div class="container darker">';
		$res=$res.$row['ip'];
		$res=$res."says <p>".$row['stime'];
		$res=$res.'</p><span class="time-right">'.$row['msgs']."</span></div>";
	}
}
echo $res;

?>