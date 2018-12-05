<?php
session_start();
if(!isset($_SESSION['k']))
	header('location:http://localhost/chat/index.php');
$roomname=$_GET['roomname'];
$con=mysqli_connect('localhost','root','');
include 'look.php';
$sql="SELECT * FROM `rooms` WHERE roomname='$roomname'";
$result=mysqli_query($con,$sql);
if($result)
{
	if(mysqli_num_rows($result)==0)
	{
		$m="this room does not extit try another one";
	echo '<script language="javascript">';
	echo 'alert("'.$m.'");';
	echo 'window.location="http://localhost/chat";';
	echo '</script>';
	}
}
else{
	echo "error" .mysqli_error($con);
}
?>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <link href="css\product.css" rel="stylesheet">
<style>
body {
    margin: 0 auto;
    max-width: 800px;
    padding: 0 20px;
}

.container {
    border: 2px solid #dedede;
    background-color: #f1f1f1;
    border-radius: 5px;
    padding: 10px;
    margin: 10px 0;
}

.darker {
    border-color: #ccc;
    background-color: #ddd;
}

.container::after {
    content: "";
    clear: both;
    display: table;
}

.container img {
    float: left;
    max-width: 60px;
    width: 100%;
    margin-right: 20px;
    border-radius: 50%;
}

.container img.right {
    float: right;
    margin-left: 20px;
    margin-right:0;
}

.time-right {
    float: right;
    color: #aaa;
}

.time-left {
    float: left;
    color: #999;
}
.anyclass{
	height:350px;
	overflow-y:Scroll;
}
#kk{
	margin-left: 150px;
}
</style>
</head>
<body>

<h2>Chat Messages-<?php echo $roomname ?> </h2>
<div class="anyclass">
<div class="container">
  
  
  
</div>
</div>
<input type="text" class="form-control" name="usermsg" id="usermsg" placeholder="add msg"><br>
<button class="btn btn-success" name="submitmsg" id="submitmsg">Send</button>
<button class="btn btn-danger" name="sub" id="kk" onclick="location.href='logout.php'" type="button">Logout</button>
 <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
 <script
  src="https://code.jquery.com/jquery-3.3.1.min.js"
  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="
  crossorigin="anonymous"></script>
 <script type="text/javascript">
 
 //for time take milisecond
 setInterval(runFunction,2000);
 function runFunction()
 {
	 $.post("cont.php",{room:'<?php echo $roomname ?>'},
	 function(data,status)
	 {
		 document.getElementsByClassName('anyclass')[0].innerHTML=data;
	 }
	 )
 }
 
 var input = document.getElementById("usermsg");

// Execute a function when the user releases a key on the keyboard
input.addEventListener("keyup", function(event) {
  // Cancel the default action, if needed
  event.preventDefault();
  // Number 13 is the "Enter" key on the keyboard
  if (event.keyCode === 13) {
    // Trigger the button element with a click
    document.getElementById("submitmsg").click();
  }
});
 
$("#submitmsg").click(function(){
	var clientmsg=$("#usermsg").val();
    $.post("my.php",{text:clientmsg,room:'<?php echo $roomname ?>',ip: '<?php echo $_SERVER['REMOTE_ADDR'] ?>'}
	,function(data,status){
	document.getElementsByClassName('anyclass')[0].innerHTML=data; });
	$("#usermsg").val(" ");
	return false;
});
</script>
</body>
</html>

     
</body>
</html> 

