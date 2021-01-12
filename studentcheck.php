<?php

if(!isset($_SESSION['user'])){
	header('location:studentlogin.php');
	exit();
}

?>