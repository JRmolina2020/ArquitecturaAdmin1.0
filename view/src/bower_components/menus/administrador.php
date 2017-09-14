
<?php include'../../model/conexion/index.php'; 
if (!isset($_SESSION['nick'])) {
header('location:../../');
}
?>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="import" href="../src/link.html">
<title>APP</title>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">
<header class="main-header">
<!-- Logo -->
<a href="index2.html" class="logo">
<!-- mini logo for sidebar mini 50x50 pixels -->
<span class="logo-mini"><b>A</b>LT</span>
<!-- logo for regular state and mobile devices -->
<span class="logo-lg"><b>Admin</b>LTE</span>
</a>
<!-- Header Navbar: style can be found in header.less -->
<nav class="navbar navbar-static-top">
<!-- Sidebar toggle button-->
<a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
<span class="sr-only">Toggle navigation</span>
</a>
<div class="navbar-custom-menu">
<ul class="nav navbar-nav">
<li class="dropdown user user-menu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">
<img src="../../model/users/<?php echo $_SESSION['foto']?>" class="user-image" alt="User Image">
<span class="hidden-xs"><?php echo $_SESSION['nick']?></span>
</a>
<ul class="dropdown-menu">
<!-- User image -->
<li class="user-header">
<img src="../../model/users/<?php echo $_SESSION['foto']?>" class="img-circle" alt="User Image">
<p>
<?php echo $_SESSION['nombre_usuario']?>
<small><?php echo $_SESSION['correo_usuario']?></small>
</p>
</li>
<!-- Menu Body -->
<li class="user-body">

<!-- /.row -->
</li>
<!-- Menu Footer-->
<li class="user-footer">
<div class="pull-left">
<a href="../../model/login/salir.php" class="btn btn-danger btn-flat">Salir</a>
</div>
<div class="pull-right">
<a href="#" class="btn btn-default btn-flat">Sign out</a>
</div>
</li>
</ul>
</li>
<!-- Control Sidebar Toggle Button -->
<li>
<a href="" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
</li>
</ul>
</div>
</nav>
</header>
<!-- Left side column. contains the logo and sidebar -->
<aside class="main-sidebar">
<!-- sidebar: style can be found in sidebar.less -->
<section class="sidebar">
<!-- Sidebar user panel -->
<div class="user-panel">
<div class="pull-left image">
<img src="../../model/users/<?php echo $_SESSION['foto']?>" class="img-circle" alt="User Image">
</div>
<div class="pull-left info">
<p><?php echo $_SESSION['nick']?></p>
<a href="#"><i class="fa fa-circle text-success"></i> Online</a>
</div>
</div>
<!-- search form -->
<form action="#" method="get" class="sidebar-form">
<div class="input-group">
<input type="text" name="q" class="form-control" placeholder="Search...">
<span class="input-group-btn">
<button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
</button>
</span>
</div>
</form>
<!-- /.search form -->
<!-- sidebar menu: : style can be found in sidebar.less -->
<ul class="sidebar-menu" data-widget="tree">
<li class="header"><?php echo $_SESSION['nivel']?></li>
<li class="active treeview">
<a href="">
<i class="fa fa-dashboard"></i> <span>MENU</span>
<span class="pull-right-container">
<i class="fa fa-angle-left pull-right"></i>
</span>
</a>
<ul class="treeview-menu">
<li class="active"><a href="../home"><i class="fa fa-home"></i>Inicio</a></li>
</ul>
</li>
<li><a href="https://adminlte.io/docs"><i class="fa fa-book"></i> <span>Documentation</span></a></li>
<li class="header">LABELS</li>
<li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
<li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
<li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
</ul>
</section>
</aside>
<div class="content-wrapper">
<section class="content-header">



