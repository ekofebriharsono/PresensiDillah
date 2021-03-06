
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Presensi</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
  <!-- Google Font: Source Sans Pro -->
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700" rel="stylesheet">
  <link rel="shortcut icon" href="smp8.png" />

</head>
<body id="bodycolor" style="background-image:url(https://scontent-sin6-2.xx.fbcdn.net/v/t1.0-9/10306380_533909006743855_3552988584089585748_n.jpg?_nc_cat=108&_nc_sid=dd9801&_nc_ohc=5R3XVYYfNPIAX-fVXFd&_nc_ht=scontent-sin6-2.xx&oh=65b0a4fd971553fa370ccc77c483a27c&oe=5F81DAB0);">
<div class="hold-transition d-flex justify-content-center">
<div class="login-box">
  <div class="login-logo">
      
    <a href="#" style="color:black;"><b>PRESENSI KELAS 8 SMP NEGERI 8 SURABAYA</b></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
    <center><img src="smp8.png" style="width: 100px; height: 100px; "></center>

    <?php
        if(isset($_GET['info'])){
            if ($_GET['info'] == "Presensi_Sukses"){
                echo '<center><p style="color:green;">Presensi Sukses!</p></center>';
            } else if($_GET['info'] == "Presensi_Gagal") {
                echo '<center><p style="color:red;">Presensi Gagal!</p></center>';
            } else if($_GET['info'] == "Telah_Presensi") {
                echo '<center><p style="color:red;">Presensi Gagal! Anda Telah Melakukan Presensi.</p></center>';
            } else if($_GET['info'] == "Melebihi_Tanggal_Sekarang") {
                echo '<center><p style="color:red;">Presensi Gagal! Tidak Boleh Melebihi Tanggal Sekarang.</p></center>';
            }
        }
    ?>
      <form action="proses/PresensiData.php" method="post">
        <p>Nama</p>
        <div class="input-group mb-3">
          <input type="input" name="nama" class="form-control" placeholder="Masukkan Nama Siswa" required>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <p>NIS</p>
        <div class="input-group mb-3">
          <input type="number" name="nis" class="form-control" placeholder="Masukkan NIS" required>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <p>Kelas</p>
        <div class="input-group mb-3">
        <select  name="kelas" class="form-control" required>
                                    <option value="kelas">Pilih Kelas</option>
                                    <option value="8A">8A</option>
                                    <option value="8B">8B</option>
                                    <option value="8C">8C</option>
                                    <option value="8D">8D</option>
                                    <option value="8E">8E</option>
                                    <option value="8F">8F</option>
                                    <option value="8G">8G</option>
                                    <option value="8H">8H</option>
                                </select>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <p>Tanggal</p>
        <div class="input-group mb-3">
          <input type="date" name="tanggal" class="form-control" required>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <p>Pilih Kehadiran</p>
        <div class="input-group mb-3">
          <input type="checkbox" name="keterangan" class="form-control" value="Hadir" checked>
          <div class="input-group-append">
            <div class="input-group-text">
            </div>
          </div>
        </div>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">Presensi</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
</div>

<!-- /.login-box -->

<!-- jQuery -->
<script src="../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>

</body>
</html>
