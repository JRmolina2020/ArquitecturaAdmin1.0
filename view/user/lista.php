<?php
include("../../model/users/lista.php");
echo "<script language=\"JavaScript\" src=\"../linkeo/js/busquedatabla.js\"></script>"; 
$data = '
<br><br>
<div class="panel panel-primary">

<div class="panel-heading">
<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Busquedad de usuarios"/>
</div>

<div class="table-responsive">
<table class="table" id="dev-table">
<thead>
<tr>
<th>Nick</th>
<th>Nombre</th>
<th>Correo</th>
<th>Nivel</th>
<th>Estado</th>
<th>Pefil</th>
<th>operaciones</th>
</tr>
</thead>
<tbody>
';
while($fila = $sel->fetch_assoc()){
$data .= '
<tr>
<td>'.$fila['nick'].'</td>
<td>'.$fila['nombre_usuario'].'</td>
<td>'.$fila['correo_usuario'].'</td>
<td>'.$fila['nivel'].'</td>
<td>';
if($fila['bloqueo'] == '1'){
$data.='<span onclick="Bloquear_user('.$fila['idusuarios'].','.$fila['bloqueo'].')" class="label label-success">Activo</span>';
}
else if ($fila['bloqueo'] == '0' ){
$data.='<span onclick="Bloquear_user('.$fila['idusuarios'].','.$fila['bloqueo'].')" class="label label-danger">Bloqueado</span>';
}
$data.='</td>
<td><img class="img-responsive img-circle" width="50" alt="Error al cargar" src="'.$fila['foto'].'"></td>
<td>
<a onclick="Mostrar('.$fila['idusuarios'].')" class="btn  btn-sm btn-warning">  <i class="fa fa-cog" aria-hidden="true"></i></a>
<a onclick="Delete('.$fila['idusuarios'].')" class="btn btn-sm  btn-danger"> <i class="fa fa-trash" aria-hidden="true"></i></a>
</td>
</tr>
</tbody>';

}
$data .=  '
</table>
</div>
</div>';
echo $data;
?>

