<?php

session_start();
if($_SESSION['id'] == ''){
  header("Location: login.php?error='belum_login'");
}else{ 
  

  ?>



<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Presensi | Dashboard</title>
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

    <!-- Navbar -->
    <nav class="main-header navbar navbar-expand navbar-white navbar-light">
      <?php include'navbar.php'; ?>
    </nav>
    <!-- /.navbar -->

    <!-- Main Sidebar Container -->
    <aside class="main-sidebar sidebar-dark-primary elevation-4">
      <?php include'sidebar.php'; ?>
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
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
              </ol>
            </div><!-- /.col -->
          </div><!-- /.row -->
        </div><!-- /.container-fluid -->
      </div>
      <!-- /.content-header -->

      <!-- Main content -->
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->

          <div class="row">
            <div class="col-md-12">
                <div class="card card-primary">
                    <div class="card-header">
                        <h3 class="card-title">Filter</h3>
                    </div>
                    <form role="form" action="index.php" method="get">
                        <div class="card-body">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Pilih Server</label>
                                <select  name="lokasi" class="form-control">
                                    <option value="PilihServer">Pilih Server</option>
                                    <option value="ps_turi">Pasar Turi</option>
                                    <option value="pgs">PGS</option>
                                    <option value="tuban">Tuban</option>
                                    <option value="all">All</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mulai Tanggal</label>
                                <input type="date" name="tanggal_start" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sampai Tanggal</label>
                                <input type="date" name="tanggal_end" class="form-control" id="exampleInputPassword1" placeholder="Password">
                            </div>
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

           

         
        
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="https://lug-surabaya.com/">LUG</a>.</strong>
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 0.0.1
      </div>
    </footer>

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
  <script src="https://cdn.jsdelivr.net/npm/chart.js@2.8.0"></script>
  <script>

var ctxx = document.getElementById('myChart').getContext('2d');
var chart = new Chart(ctxx, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {// waktu
        labels: ['0', '1', '2', '3', '4', '5', '6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23'],
        datasets: [{
            label: 'kendaraan masuk',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $m24; ?>,<?php echo $m1; ?>, <?php echo $m2; ?>, <?php echo $m3; ?>, <?php echo $m4; ?>, <?php echo $m5; ?>, <?php echo $m6; ?>, <?php echo $m7; ?>,<?php echo $m8; ?>,<?php echo $m9; ?>,<?php echo $m10; ?>,<?php echo $m11; ?>,<?php echo $m12; ?>,<?php echo $m13; ?>,<?php echo $m14; ?>,<?php echo $m15; ?>,<?php echo $m16; ?>,<?php echo $m17; ?>,<?php echo $m18; ?>,<?php echo $m19; ?>,<?php echo $m20; ?>,<?php echo $m21; ?>,<?php echo $m22; ?>,<?php echo $m23; ?>]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx1 = document.getElementById('myChart1').getContext('2d');
var chart = new Chart(ctx1, {
    // The type of chart we want to create
    type: 'line',

    // The data for our dataset
    data: {
      labels: ['0', '1', '2', '3', '4', '5', '6','7','8','9','10','11','12','13','14','15','16','17','18','19','20','21','22','23'],
        datasets: [{
            label: 'Pendapatan Per Periode',
            backgroundColor: 'rgba(0, 0, 0, 0.1)',
            borderColor: 'rgb(255, 99, 132)',
            data: [<?php echo $b24; ?>,<?php echo $b1; ?>, <?php echo $b2; ?>, <?php echo $b3; ?>, <?php echo $b4; ?>, <?php echo $b5; ?>, <?php echo $b6; ?>, <?php echo $b7; ?>,<?php echo $b8; ?>,<?php echo $b9; ?>,<?php echo $b10; ?>,<?php echo $b11; ?>,<?php echo $b12; ?>,<?php echo $b13; ?>,<?php echo $b14; ?>,<?php echo $b15; ?>,<?php echo $b16; ?>,<?php echo $b17; ?>,<?php echo $b18; ?>,<?php echo $b19; ?>,<?php echo $b20; ?>,<?php echo $b21; ?>,<?php echo $b22; ?>,<?php echo $b23; ?>]
        }]
    },

    // Configuration options go here
    options: {}
});

var ctx = document.getElementById( "pendapatan" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($resPendapatan)) { echo '"' . $d['waktu_in'] . '",';}?>],
            datasets: [
                {
                    label: "Pendapatan",
                    data: [<?php while ($s = mysqli_fetch_array($resPendapatan1)) { echo '"' . $s['biayatotal'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctx = document.getElementById( "hari" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'line',
        data: {
            labels: ["Senin","Selasa","Rabu","Kamis","Jumat","Sabtu","Minggu"],
            datasets: [
                {
                    label: "Volume Parkir",
                    data: [<?php echo $senin; ?>, <?php echo $selasa; ?>, <?php echo $rabu; ?>, <?php echo $kamis; ?>, <?php echo $jumat; ?>, <?php echo $sabtu; ?>, <?php echo $minggu; ?> ],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    var ctxm = document.getElementById( "masalah" );
    ctxm.height = 100;
    var myChart = new Chart( ctxm, {
        type: 'bar',
        data: {
            labels: [<?php while ($d = mysqli_fetch_array($resMasalah)) { echo '"' . $d['tanggal'] . '",';}?>],
            datasets: [
                {
                    label: "Tiket Masalah",
                    data: [<?php while ($s = mysqli_fetch_array($resMasalah1)) { echo '"' . $s['jumlah_tiketmasalah'] . '",';}?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    //pie chart
    var ctx = document.getElementById( "ProporsiKendaraanParkir" );
    ctx.height = 200;
    var myChart = new Chart( ctx, {
        type: 'pie',
        data: {
            datasets: [ {
                data: [ <?php echo $totalVolume;?>, <?php echo $motorTot; ?>, <?php echo $mobilTot;?> ],
                backgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                                
                                    "rgba(0,0,0,0.07)"
                                ],
                hoverBackgroundColor: [
                                    "rgba(0, 123, 255,0.9)",
                                    "rgba(0, 123, 255,0.7)",
                          
                                    "rgba(0,0,0,0.07)"
                                ]

                            } ],
            labels: [
                            "Vol Total Ken",
                            "R2 out",
                            "R4 out"
                            
                        ]
        },
        options: {
            responsive: true
        }
    } );

    var ctx = document.getElementById( "totalwilayah" );
    ctx.height = 100;
    var myChart = new Chart( ctx, {
        type: 'bar',
        data: {
            labels: ['TURI','PGS','TUBAN'],
            datasets: [
                {
                    label: "Total Wilayah",
                    data: [<?php echo $TOTAL_TURI; ?>, <?php echo $TOTAL_PGS; ?>, <?php echo $TOTAL_TUBAN; ?>],
                    borderColor: "rgba(0, 123, 255, 0.9)",
                    borderWidth: "0",
                    backgroundColor: "rgba(0, 123, 255, 0.5)"
                            }
                        ]
        },
        options: {
            scales: {
                yAxes: [ {
                    ticks: {
                        beginAtZero: true
                    }
                                } ]
            }
        }
    } );

    



    

  </script>
</body>
<?php 
}
?>
</html>
