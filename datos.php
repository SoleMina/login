<?php
session_start();


if (isset($_POST['submit'])) {

	$username = "Carlos";
	$password = "123abc";
	if ( (isset($_POST['nombre'])) && (isset($_POST['password'])) ) {

		$nombre = $_POST['nombre'];
		$pas = $_POST['password'];

	}else{
		header('location: index.php');
	}


}else{
	header('location: index.php');
}

?>