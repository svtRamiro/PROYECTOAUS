<?php 
	include 'includes/config.php';
	if (isset($_GET["accion"])) {
		$accion=$_GET["accion"];
	} else {
		$accion="index";
	}
	if (is_file("controller/".$accion."Controller.php")) {
		require_once("controller/".$accion."Controller.php");
	} else {
		require_once("controller/errorController.php");
	}
?>