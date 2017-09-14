<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="import" href="../src/link.html">
<?php include'../../model/conexion/index.php';?>
</head>
<body>
<?php if ($_SESSION['nivel']=='ADMINISTRADOR') {include"../src/bower_components/menus/administrador.php";}else if ($_SESSION['nivel']=='ASISTENTE') {	include"../src/bower_components/menus/asistente.php";}else{	include"../src/bower_components/menus/sadministrador.php";}?>
<div class="container-fluid">
<div class="well">
<h1>estas aqui</h1>
</div>
</div>
<script type="text/javascript" src="../src/js/bootstrap.min.js"></script>
</body>
</html>