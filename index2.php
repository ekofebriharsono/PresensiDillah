<?php

session_start();
include 'proses/koneksi.php';
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
    <!-- DataTables -->
    <link rel="stylesheet" href="plugins/datatables-bs4/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="plugins/datatables-responsive/css/responsive.bootstrap4.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="smp8.png" />

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
          <!-- Brand Logo -->
          <a href="index.php" class="brand-link">
        <img src="dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
          style="opacity: .8">
        <span class="brand-text font-weight-light">Dillah</span>
      </a>

      <!-- Sidebar -->
      <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
          <div class="image">
            <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
          </div>
          <div class="info">
            <a href="#" class="d-block"><?php echo $_SESSION['nama']; ?></a>
          </div>
        </div>

        <!-- Sidebar Menu -->
        <nav class="mt-2">
          <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
            <li class="nav-item">
              <a href="index.php" class="nav-link">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Rekap Presensi Siswa
                </p>
              </a>
            </li>
            <li class="nav-item">
              <a href="index2.php" class="nav-link active">
                <i class="nav-icon fas fa-tachometer-alt"></i>
                <p>
                  Data Presensi Siswa
                </p>
              </a>
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
              <h1 class="m-0 text-dark">Data Presensi Siswa</h1>
            </div><!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item active">Data Presensi Siswa</li>
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
                    <form role="form" action="index2.php" method="get">
                        <div class="card-body">
                            <div class="form-group">
                              <?php
                              if(isset($_GET['id_presensi'])){
                                $id_presensi = $_GET['id_presensi'];
                                $queryDel = "delete from presensi where id_presensi = $id_presensi";
                                $res = mysqli_query($con, $queryDel);

                                if($res){
                                  echo '<center><label for="" style="color:green;">Hapus Data Sukses!</label></center>';
                                } else {
                                  echo '<center><label for="" style="color:red;">Hapus Data Gagal!</label></center>';
                                }

                              }
                              ?>
                                <label for="exampleInputEmail1">Pilih Kelas</label>
                                <select  name="kelas" class="form-control">
                                    <option value="semuaKelas">Semua Kelas</option>
                                    <option value="8A">8A</option>
                                    <option value="8B">8B</option>
                                    <option value="8C">8C</option>
                                    <option value="8D">8D</option>
                                    <option value="8E">8E</option>
                                    <option value="8F">8F</option>
                                    <option value="8G">8G</option>
                                    <option value="8H">8H</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Mulai Tanggal</label>
                                <input type="date" name="tanggal_start" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <div class="form-group">
                                <label for="exampleInputPassword1">Sampai Tanggal</label>
                                <input type="date" name="tanggal_end" class="form-control" id="exampleInputPassword1" placeholder="Password" required>
                            </div>
                            <!-- <div class="form-group">
                                <label for="exampleInputPassword1">Nama Siswa</label>
                                <input type="input" name="nama" class="form-control" placeholder="Nama Siswa">
                            </div> -->
                        </div>
                        <div class="card-footer">
                        <button type="submit" class="btn btn-primary">Cari Data</button>
                        </div>
                    </form>
                    </div>
                </div>
            </div>

            <?php
            $isFilter = false;
            $isTanggal = false;
            $isNama = false;

            $kelas = null;
            $nama = null;
            $tanggal = null;

            if(isset($_GET['kelas'])){
              $isFilter = true;

              if(@$_GET['kelas'] != 'semuaKelas'){
                $kelas = "kelas = '".$_GET['kelas']."'";
              } else {
                $kelas = "kelas not like '% %'";
              }

              if(@$_GET['tanggal_start'] != '' && @$_GET['tanggal_end'] != ''){
                $isTanggal = true;
                $tgl_start = $_GET['tanggal_start'];
                $tgl_end = $_GET['tanggal_end'];
                $tanggal = " and tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date)";
              }
              // if(@$_GET['nama'] != ''){
              //   $isNama = true;
              //   $nama = " and nama %".$_GET['nama']."%";
              // }

              $query = "select * from presensi where ".$kelas.$tanggal." order by kelas asc, nama asc";
              $res = mysqli_query($con, $query);

            

            }


            if($isFilter){ ?>
            <div class="row">
              <!-- <div class="col-md-12"> 
                <form action="excel2.php" method="post">
                <input type="text" hidden name="kelas" value="<?php // echo @$_GET['kelas'];?>">
                  <input type="text" hidden name="tanggal_start" value="<?php // echo $tgl_start;?>">
                  <input type="text" hidden name="tanggal_end" value="<?php // echo $tgl_end;?>">
                  <input type="text" hidden name="query" value="<?php // echo $query;?>">
                <center><button type="submit" class="btn btn-success">Export Excel</button></center>
                </form>
              </div> -->
              <!-- <div class="col-md-6"> 
                <center><button class="btn btn-danger">Export PDF</button></center>
              </div> -->
            </div>
            <hr>
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header">
                    <h3 class="card-title">Data Presensi Siswa</h3>
                  </div>
                  <!-- /.card-header -->
                  <div class="card-body">
                    <table id="example1" class="table table-bordered table-striped">
                      <thead>
                      <tr>
                        <th>NIS</th>
                        <th>NAMA</th>
                        <th>KELAS</th>
                        <th>TANGGAL</th>
                        <th>KET</th>
                        <th>AKSI</th>
                      </tr>
                      </thead>
                      <tbody>
                        <?php while($row = mysqli_fetch_array($res)){ ?>
                          <tr>
                            <td><?php echo $row['nis']; ?></td>
                            <td><b><?php echo $row['nama']; ?></b></td>
                            <td><?php echo $row['kelas']; ?></td>
                            <td><?php echo $row['tanggal']; ?></td>
                            <td><?php echo $row['keterangan']; ?></td>
                            <td>
                              <form action="index2.php" method="get">
                                <input hidden type="number" name="id_presensi" value="<?php echo $row['id_presensi']; ?>">
                                <button type="submit" class="btn btn-danger">Hapus</button>
                              </form>
                            </td>
                          </tr>
                        <?php  } ?>
                      </tbody>
                      <tfoot>
                        <tr>
                          <th>NIS</th>
                          <th>NAMA</th>
                          <th>KELAS</th>
                          <th>TANGGAL</th>
                          <th>KET</th>
                          <th>AKSI</th>
                        </tr>
                      </tfoot>
                    </table>
                  </div>
                  <!-- /.card-body -->
                </div>
              </div>
            </div>
            
            
            
           <?php }

            ?>



           

         
        
        </div><!-- /.container-fluid -->
      </section>
      <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
    <footer class="main-footer">
      <strong>Copyright &copy; 2020 <a href="https://lug-surabaya.com/">Dillah</a>.</strong>
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
<!-- Bootstrap 4 -->
<script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- DataTables -->
<script src="plugins/datatables/jquery.dataTables.min.js"></script>
<script src="plugins/datatables-bs4/js/dataTables.bootstrap4.min.js"></script>
<script src="plugins/datatables-responsive/js/dataTables.responsive.min.js"></script>
<script src="plugins/datatables-responsive/js/responsive.bootstrap4.min.js"></script>
<!-- AdminLTE App -->
<script src="dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#example2').DataTable({
      "paging": true,
      "lengthChange": false,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });
</script>
</body>
<?php 
}
?>
</html>
