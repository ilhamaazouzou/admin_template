<?php
include("connectionbd.php");
include("fonctionconnex.php");

if(!isConnected()){
	echo "<script> document.location = 'login.php';</script>";
	exit();
}

?>