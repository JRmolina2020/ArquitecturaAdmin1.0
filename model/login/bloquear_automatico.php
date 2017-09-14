<?php 
include '../conexion/index.php';
$user = $_SESSION['nick'];
$up =$con->query("UPDATE usuarios SET bloqueo=0 WHERE nick='$user' ");
if($up){
$_SESSION =array();
session_destroy();
header('');
}
?>