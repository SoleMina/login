<?php
session_start();

if (isset($_POST['submit'])) {
	$username = "karina";
	$password = "123";
	if ( (isset($_POST['nombre'])) || (isset($_POST['password']) ) ) {

		$nombre = $_POST['user'];
		$pass = $_POST['password'];

		if (($nombre == $username) && ($pass == $password)) {
			//crear nuestra sesión
			$_SESSION['username'] = $nombre;
			header('location: user.php');

		}else{
			header('location: index.php?res=incorrecto');
		}

	}else{
		header('location: index.php');
	}


}else{
	header('location: index.php');
}

?>

