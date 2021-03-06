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
  <!--Nav bar-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="dist/css/nav_bar.css">


</head>

<body class="hold-transition sidebar-mini layout-fixed">
  <div class="topnav" id="nav_mobile">
    <div id="myLinks">
        <a href="pages/charts/modificar_reserva.php">Modificar Reserva</a>
        <a href="pages/charts/reservar.php">Reservar</a>
        <a href="./index.php">Hogar</a>
    </div>
    <a href="javascript:void(0);" class="icon" onclick="navBar()">
      <i class="fa fa-bars"></i>
    </a>
  </div>
  <div class="wrapper">
    <?php
     //Variables from login
     session_start();
     if(!isset($_SESSION["nombre_emp"])){
		echo "<script> 
			alert('No estas autorizado para ver esta pagina');
			location.href='pages/examples/login.php';
			</script>";
	 }
    ?>
    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4" id="aside1">
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
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION["nombre_emp"] ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->

            <li class="nav-item has-treeview menu-open">
              <a href="./index.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>Dashboard

                </p>
              </a>
            </li>
            <li class="nav-item has-treeview">
              <a href="#" class="nav-link">
                <i class="nav-icon far fa-calendar-alt"></i>
                <p>
                  Reservaciones
                  <i class="right fas fa-angle-left"></i>
                </p>
              </a>
              <ul class="nav nav-treeview">
                <li class="nav-item">
                  <a href="pages/charts/reservar.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Reservar Hot Desk</p>
                  </a>
                </li>
                <li class="nav-item">
                  <a href="pages/charts/modificar_reserva.php" class="nav-link">
                    <i class="far fa-circle nav-icon"></i>
                    <p>Modificar reservación</p>
                  </a>
                </li>
              </ul>
            </li>
          </ul>
        </nav>

        <div class="user-panel mt-5 pb-3 mb-3 d-flex">
          <div class="info">
            <a href="pages/examples/login.php" class="nav-link">Log out</a>
          </div>
        </div>

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
      <script>
        if( /Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) ) {
          document.getElementById("aside1").style.display="none";
          function navBar() {
          var x = document.getElementById("myLinks");
            if (x.style.display === "block") {
                x.style.display = "none";
            } else {
                x.style.display = "block";
            }
          }
        }
      </script>
      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> 
                    <?php
                    //The URL with the informtion to GET from API
                    $url = 'http://localhost:60863/api/datos_dashboard_user/1';
                    $contents = file_get_contents($url);
                    $array = explode(",", $contents);
                    $nHotDesk = explode(":", $array[1]);
                    echo substr($nHotDesk[1],1,-2);
                    ?>
                  </h3>
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
                  <h3><?php
                    //The URL with the informtion to GET from API
                    $url = 'http://localhost:60863/api/datos_dashboard_user/3';
                    $contents = file_get_contents($url);
                    $array = explode(",", $contents);
                    $nHotDeskDis = explode(":", $array[1]);
                    echo substr($nHotDeskDis[1],1,-2);
                    ?></sup></h3>
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
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?php
                    //The URL with the informtion to GET from API
                    $url = 'http://localhost:60863/api/datos_dashboard_user/2';
                    $contents = file_get_contents($url);
                    $array = explode(",", $contents);
                    $nUser = explode(":", $array[1]);
                    echo substr($nUser[1],1,-2);
                    ?></h3>

                  <p>Usuarios registrados</p>
                </div>
                <div class="icon">
                  <i class="icon ion-person"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-danger">
                <div class="inner">
                  <h3><?php
                    //The URL with the informtion to GET from API
                    $url = 'http://localhost:60863/api/datos_dashboard_user/4';
                    $contents = file_get_contents($url);
                    $array = explode(",", $contents);
                    $nUserOffice = explode(":", $array[1]);
                    echo substr($nUserOffice[1],1,-2);
                    ?></h3>

                  <p>Usuarios en la oficina</p>
                </div>
                <div class="icon">
                  <i class="icon ion-person-stalker"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <div class="card">
                <div class="card-header">
                  <h3 class="card-title">Usuarios activos</h3><br>
                  <input type="text" id="usuario_nombre" onkeyup="busarUsuario()" placeholder="Buscar usuario.." title="Escribe el nombre">
                </div>
                <?php
                $url = 'http://localhost:60863/api/datos_dashboard_user/5';
                $contents = file_get_contents($url);
                $contents = str_replace('"','', $contents); //Cleans de string
                //Check if it has to display the table or not
                $find = "codigo: 0";
                $pos = strpos($contents, $find);
                if($pos===false){
                  $array = explode("|", $contents);
                  $rows = sizeof($array);
                  ?>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle" id="tabla_usuarios">
                          <thead>
                            <tr>
                              <th>Nombre</th>
                              <th>Area</th>
                              <th>Hot desk</th>
                            </tr>
                            <tbody>
                              <?php $n=1; 
                                for($i=0; $i<$rows-1; $i++): 
                                  $innerArr = explode(",", $array[$i]);
                                ?>
                                <tr>
                                  <td><?php echo substr($innerArr[$n],7)?></td>
                                  <td><?php echo substr($innerArr[$n+1],5)?></td>
                                  <td><span class="badge badge-success float-left"><?php echo substr($innerArr[$n+2],10)?></span></td>
                                </tr>
                              <?php $n=2; //The first array is shorter than the others so the value must go up
                              endfor; ?>
                            </tbody>
                          </thead>
                        </table>
                      </div>
                      
                  <?php
                }else{
                  echo "&nbsp;&nbsp; No hay usuarios en la oficina";
				}
                ?>
                <!-- Script buscar usuario en tabla usuarios -->
                <script>
                    function busarUsuario() {
                        var input, filter, table, tr, td, i, txtValue;
                        input = document.getElementById("usuario_nombre");
                        filter = input.value.toUpperCase();
                        table = document.getElementById("tabla_usuarios");
                        tr = table.getElementsByTagName("tr");
                        for (i = 0; i < tr.length; i++) {
                            td = tr[i].getElementsByTagName("td")[0];
                            if (td) {
                                txtValue = td.textContent || td.innerText;
                                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                                    tr[i].style.display = "";
                                } else {
                                    tr[i].style.display = "none";
                                }
                            }       
                        }
                    }
                </script>

                <!-- /.card-body -->
                <!-- /.card-footer -->
              </div>
            </section>
            <!-- /.Left col -->
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
            
            <section class="col-lg-5 connectedSortable">

              <div class="card">
                <div class="card-header border-0">
                  <h3 class="card-title">Próximas reservaciones</h3>
                </div>
                <?php
                $url = 'http://localhost:60863/api/proximas_reservaciones/'.$_SESSION["numero_emp"];
                $contents = file_get_contents($url);
                $contents = str_replace('"','', $contents); //Cleans de string
                //Check if it has to display the table or not
                $find = "codigo: 0";
                $pos = strpos($contents, $find);
                if($pos===false){
                    $array = explode("|", $contents);
                    $rows = sizeof($array);
                    ?>
                      <div class="card-body table-responsive p-0">
                        <table class="table table-striped table-valign-middle">
                          <thead>
                            <tr>
                              <th>Número de Hot Desk</th>
                              <th>Fecha</th>
                              <th>Hora Check In</th>
                              <th>Hora Check Out</th>
                            </tr>
                            <tbody>
                              <?php $n=2; 
                                for($i=0; $i<$rows-1; $i++): 
                                  $innerArr = explode(",", $array[$i]);
                                ?>
                                <tr>
                                  <td><img
                                    src="http://176.32.230.6/beresfordbusinesscentre.co.uk/wp-content/uploads/2016/03/desk-icon.png"
                                    alt="Product 1" class="img-circle img-size-32 mr-2">
                                    <?php echo substr($innerArr[$n],13)?></td>
                                  <td><?php echo substr($innerArr[$n+1],7, 11)?></td>
                                  <td><?php echo substr($innerArr[$n+2],14)?></td>
                                  <td><?php echo substr($innerArr[$n+3],13)?></td>
                                </tr>
                              <?php $n=3; //The first array is shorter than the others so the value must go up
                              endfor; ?>
                            </tbody>
                          </thead>
                        </table>
                      </div>
                    <?php
				}else{
                    echo "&nbsp;&nbsp; No tiene proximas reservaciones";
				}
                ?>
              </div>

            </section>

            <!-- right col -->
          </div>
          <!-- /.row (main row) -->
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
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
