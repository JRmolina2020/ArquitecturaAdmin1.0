<?php 
if($_SESSION['nivel'] != 'SADMINISTRADOR'){
header("location:../../model/login/bloquear_automatico.php");
}
?>