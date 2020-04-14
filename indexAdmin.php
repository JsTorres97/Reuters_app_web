<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Reuters | Hot Desk</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bbootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="wrapper">

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <!-- Brand Logo -->
      <a href="" class="brand-link">
        <img src="https://globalriskinsights.com/wp-content/uploads/2016/03/Reuters-Logo.jpg" alt="AdminLTE Logo"
          class="brand-image img-circle elevation-3" style="opacity: .8">
        <span class="brand-text font-weight-light">Reuters | Hot Desk</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img
              src="https://scontent-dfw5-1.xx.fbcdn.net/v/t1.0-9/p960x960/79914140_2476795765892705_7171981350025560064_o.jpg?_nc_cat=109&_nc_sid=85a577&_nc_ohc=duVZOAg8MV4AX9L6jr0&_nc_ht=scontent-dfw5-1.xx&_nc_tp=6&oh=32e4887525664ad5bcb9d0dc65a0e60a&oe=5EEBEA52"
              class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block">Jesús Torres</a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
			<li class="nav-item has-treeview menu-open">
              <a href="./indexAdmin.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard

                </p>
              </a>
            </li>
            <li class="nav-item has-treeview menu-open">
              <a href="pages/charts/reportes.php" class="nav-link	">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Reportes

                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Control de Usuarios
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/agregar_usuario.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Agregar usuario</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/modificar_usuario.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modificar usuario</p>
                  </a>
                </li>
                
              </ul>
            </li>
          </ul>
        </nav>
        <!-- /.sidebar-menu -->
      </div>
      <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0 text-dark">Dashboard</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->
	  
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
			<div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
			<div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3>100</h3>

                  <p>Hot Desk</p>
                </div>
                <div class="icon">
                  <i class="icon ion-android-laptop"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
			<div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3>96</sup></h3>

                  <p>Hot Desk disponibles</p>
                </div>
                <div class="icon">
                  <i class="icon ion-calendar"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3>4</h3>

                  <p>Usuarios en la oficina</p>
                </div>
                <div class="icon">
                  <i class="icon ion-person-stalker"></i>
                </div>
              </div>
            </div>
			<!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3>125</h3>

                  <p>Usuarios registrados</p>
                </div>
                <div class="icon">
                  <i class="icon ion-person"></i>
                </div>
              </div>
            </div>
            
            <!-- ./col -->
		   </div>
          <!-- /.row (main row) -->
		  </div><!-- /.container-fluid -->
		</div>
			
          
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">

              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Reportes recientes</h3>
                </div>
                <div class="card-body table-responsive p-0">
                  <table class="table table-striped table-valign-middle">
                    <thead>
                      <tr>
                        <th>Codigo Reporte</th>
                        <th>Fecha</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <td>
                          <img
                            src="http://176.32.230.6/beresfordbusinesscentre.co.uk/wp-content/uploads/2016/03/desk-icon.png"
                            alt="Product 1" class="img-circle img-size-32 mr-2">
                          REHD010320
                        </td>
                        <td>01/03/2020</td>
                      </tr>
                      <tr>
                        <td>
                          <img
                            src="http://176.32.230.6/beresfordbusinesscentre.co.uk/wp-content/uploads/2016/03/desk-icon.png"
                            alt="Product 1" class="img-circle img-size-32 mr-2">
                          REHD010220
                        </td>
                        <td>01/02/2020</td>
                      </tr>
                      <tr>
                        <td>
                          <img
                            src="http://176.32.230.6/beresfordbusinesscentre.co.uk/wp-content/uploads/2016/03/desk-icon.png"
                            alt="Product 1" class="img-circle img-size-32 mr-2">
                          REHD010120
                        </td>
                        <td>01/01/2020</td>
                      </tr>
                      <tr>
                        <td>
                          <img
                            src="http://176.32.230.6/beresfordbusinesscentre.co.uk/wp-content/uploads/2016/03/desk-icon.png"
                            alt="Product 1" class="img-circle img-size-32 mr-2">
                          REHD011219
                        </td>
                        <td>01/12/2019</td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>

            </section>

            <!-- ./Left col -->
          </div>
		  
      </section>
      <!-- /.content -->
    
    <!-- /.content-wrapper -->


    <!-- Control Sidebar -->
    <aside class="control-sidebar control-sidebar-dark">
      <!-- Control sidebar content goes here -->
    </aside>
    <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
  <script>
    $.widget.bridge('uibutton', $.ui.button)
  </script>
  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <script src="plugins/chart.js/Chart.min.js"></script>
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
</body>

</html>
