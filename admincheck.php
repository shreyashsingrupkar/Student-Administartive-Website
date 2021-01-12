<?php

if(!isset($_SESSION['adminuser'])){
	header('location:admin.php');
	exit();
}

?>