<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<link rel="import" href="../src/link.html">
<!-- ///////////////////bloqueo automatico -->
<?php include'../../model/conexion/index.php';
include'../../model/login/permiso.php';?>
<!-- ///////////////end bloqueo automatico -->
</head>
<body>
<!-- ////////////////////////MENU -->
<?php if ($_SESSION['nivel']=='ADMINISTRADOR') {include"../src/bower_components/menus/administrador.php";}else if ($_SESSION['nivel']=='ASISTENTE') {	include"../src/bower_components/menus/asistente.php";}else{	include"../src/bower_components/menus/sadministrador.php";}?>
<!-- ///////////////////////END MENU -->
<div class="container-fluid">
<div class="row">
<div class="col-xs-12">
<div class="box box-default">
<div class="box-header with-border">
<h3 class="box-title">Gestion de usuarios</h3>
</div>
<div class="box-body">
<button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modaluser">
Nuevo usuario
</button><br>
<div class="lista_user"></div><br>
</div>
</div>
</div>
</div>
</div>
<!-- modals de registros y de edicion de usuarios -->
<div class="modal fade" id="modaluser" data-backdrop="static" data-keyboard="false" data-keyboard=”false” tabindex=”-1″  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" role=”dialog”>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Nuevo usuario</h4>
</div>
<div class="modal-body">
<form id="formulariouser" method="POST" enctype="multipart/form-data">

<div class="form-group">
<label for="text">Nick de usuario</label>
<input type="input" class="form-control" id="nick" name="nick" placeholder="Ej:tomas12">
</div>
<div class="form-group">
<label for="exampleInputPassword1">Password</label>
<input type="password" class="form-control" id="pass" name="pass" placeholder="Password">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control" id="correo" name="correo" placeholder="Correo electronico">
</div>
<div class="form-group">
<label for="text">Nombre completo</label>
<input type="input" class="form-control" id="nombre" name="nombre" placeholder="Ej:raul castellano">
</div>
<div class="form-group">
<label>Nivel de usario</label>
<select class="form-control select2" id="nivel" name="nivel" style="width: 100%;">
<option value="SADMINISTRADOR">Super administrador</option>
<option value="ADMINISTRADOR">Administrador</option>
<option value="ASISTENTE">Asistente</option>
</select>
</div>
<div class="form-group">
<label class="col-lg-6 control-label">Imagen</label>  
<input class="form-control"  type="file" name="foto" id="foto">
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
<button type="submit" class="btn btn-primary">Guardar</button>
</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
</div>

<!-- ///////////////////////////////////update usuarios -->
<div class="modal fade" id="modaluserupdate" data-backdrop="static" data-keyboard="false" data-keyboard=”false” tabindex=”-1″  tabindex="-1" role="dialog" aria-labelledby="myModalLabel" role=”dialog”>
<div class="modal-dialog">
<div class="modal-content">
<div class="modal-header">
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span></button>
<h4 class="modal-title">Editar usuario</h4>
</div>
<div class="modal-body">
<form id="formulariousuariosupdate">
<div class="form-group">
<label for="text">Nick de usuario</label>
<input type="input" class="form-control" id="nick2" name="nick2" placeholder="Ej:tomas12">
</div>
<div class="form-group">
<label for="exampleInputEmail1">Email</label>
<input type="email" class="form-control" id="correo2" name="correo2" placeholder="Correo electronico">
</div>
<div class="form-group">
<label for="text">Nombre completo</label>
<input type="input" class="form-control" id="nombre2" name="nombre2" placeholder="Ej:raul castellano">
</div>
<div class="form-group">
<label>Nivel de usario</label>
<select class="form-control select2" id="nivel2" name="nivel2" style="width: 100%;">
<option value="SADMINISTRADOR">Super administrador</option>
<option value="ADMINISTRADOR">Administrador</option>
<option value="ASISTENTE">Asistente</option>
</select>
</div>
<div class="modal-footer">
<button type="button" class="btn btn-danger pull-left" data-dismiss="modal">Cancelar</button>
<button type="button" class="btn btn-primary"  onclick="ModificarU()">Modificar</button>
<input type="hidden" id="hidden_usuario_id">
</div>
</form>
</div>
<!-- /.modal-content -->
</div>
<!-- /.modal-dialog -->
</div>
</div>
<!-- ////////////////////////////////////////end update -->
<!-- end modal de registros y edicion de usuarios -->
<!-- js controller user -->
<script src="../../controller/usercontroller/index.js"></script>
<script type="text/javascript" src="../src/js/bootstrap.min.js"></script>
<!-- end js controller -->
</body>
</html>