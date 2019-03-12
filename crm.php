<?php
session_start();
include ('verificar.php');
?>
<?php include 'config/head.php'; ?>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-black sidebar-mini">
  <div class="wrapper">

    <!-- Main Header -->
    <header class="main-header">

      <!-- Logo -->
      <a href="index2.html" class="logo">
        <!-- mini logo for sidebar mini 50x50 pixels -->
        <span class="logo-mini"><b>S</b>CRM</span>
        <!-- logo for regular state and mobile devices -->
        <span class="logo-lg"><b>Segurin</b>CRM</span>
      </a>

      <!-- Header Navbar -->
      <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">

            <!-- User Account Menu -->
            <li class="dropdown user user-menu">
              <!-- Menu Toggle Button -->
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <!-- The user image in the navbar-->
                <img src="<?php echo $_SESSION['image'];?>" class="user-image" alt="User Image">
                <!-- hidden-xs hides the username on small devices so only the image appears. -->
                <span class="hidden-xs"><?php echo $_SESSION['name']; ?></span>
              </a>
              <ul class="dropdown-menu">
                <!-- The user image in the menu -->
                <li class="user-header">
                  <img src="<?php echo $_SESSION['image'];?>" class="img-circle" alt="User Image">
                  <p>
                    <?php echo $_SESSION['name']; ?>
                    <small><?php echo $_SESSION['email']; ?></small>
                  </p>
                </li>
                </li>
                <!-- Menu Footer-->
                <li class="user-footer">
                  <div class="pull-left">
                    <a href="edit-profile.php" class="btn btn-default btn-flat">Editar Perfil</a>
                  </div>
                  <div class="pull-right">
                    <a href="logout.php" class="btn btn-default btn-flat">Cerrar Sesion</a>
                  </div>
                </li>
              </ul>
            </li>
            <!-- Control Sidebar Toggle Button -->
            <li>
              <a href="#" data-toggle="control-sidebar"><i class="fa fa-gears"></i></a>
            </li>
          </ul>
        </div>
      </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

      <!-- sidebar: style can be found in sidebar.less -->
      <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
          <div class="pull-left image">
            <img src=" <?php echo $_SESSION['image'];?>" class="img-circle" alt="User Image">
          </div>
          <div class="pull-left info">
            <p><?php echo $_SESSION['name']; ?></p>
            <!-- Status -->
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu" data-widget="tree">
          <li class="header">HEADER</li>
          <!-- Optionally, you can add icons to the links -->
          <li class="active"><a href="#" id="Inicio"><i class="fa fa-home"></i> <span>Inicio</span></a></li>
          <li class="treeview menu-open">
          <a href="#">
            <i class="fa fa-plus"></i> <span>Registrar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: block;">
            <li><a href="#" id="R_Clientes"><i class="fa fa-users"></i>Clientes</a></li>
            <li><a href="#" id="R_Companias"><i class="fa fa-building"></i>Companias</a></li>
            <li><a href="#" id="R_Susbcripciones"><i class="fa fa-id-card"></i>Subscripciones</a></li>
            <li><a href="#" id="R_Reportes"><i class="fa fa-flag"></i>Reportes</a></li>
          </ul>
          <li class="treeview menu-open">
          <a href="#">
            <i class="fa fa-database"></i> <span>Consultar</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu" style="display: block;">
            <li><a href="#" id="Clientes"><i class="fa fa-users"></i>Clientes</a></li>
            <li><a href="#" id="Companias"><i class="fa fa-building-o"></i>Companias</a></li>
            <li><a href="#" id="Susbcripciones"><i class="fa fa-id-card"></i>Subscripciones</a></li>
            <li><a href="#" id="Reportes"><i class="fa fa-flag"></i>Reportes</a></li>
          </ul>
        </li>
        </ul>
        <!-- /.sidebar-menu -->
      </section>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
        <h1>
          Inicio
          <small>informacion</small>
        </h1>
        <ol class="breadcrumb">
          <li><a href="#"><i class="fa fa-dashboard"></i> Inicio</a></li>
          <li class="active">Aqui</li>
        </ol>
      </section>

      <!-- Main content -->
      <div>
        <section class="content container-fluid" id="central">
          <!--------------------------
            | Your Page Content Here |
          -------------------------->
        </section>
      </div>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

    <!-- Main Footer -->
    <footer class="main-footer">
      <!-- To the right -->
      <div class="pull-right hidden-xs">
        Anything you want
      </div>
      <!-- Default to the left -->
      <strong>Copyright &copy; 2016 <a href="#">SegurinCRM</a>.</strong> All rights reserved.
    </footer>


  </div>
  <!-- ./wrapper -->
<?php include 'config/body.php'; ?>
<!-- Calls to Jquery Refresh -->
<script src="js/calls.js" charset="utf-8"></script>

</body>

</html>
