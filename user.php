<?php
session_start();
if (isset( $_SESSION['username'])) {
	echo "Bienvenida, ".$_SESSION['username'];
}else{
	echo "No tiene acceso a esta página";
}

?>