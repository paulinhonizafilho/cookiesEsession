<?php
session_start();

$usuario= $_POST['usuario'];
$senha= $_POST['senha'];



if (($_POST['usuario'] == "Paulo") and ($_POST['senha']== 20322)){
	$_SESSION['usuario_login'] = 1;
}else{
	$_SESSION['usuario_login'] = 0;
}
 
 header('Location: principal.php');
 
 
 
?>