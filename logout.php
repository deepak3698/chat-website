<?php
session_start();
session_destroy();
header('location:http://localhost/chat/index.php');
?>