<?php 
if($_SESSION['nivel'] != 'ADMINISTRADOR'){
header("location:../../model/login/bloquear_automatico.php");
}
?>