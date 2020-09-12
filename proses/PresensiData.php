<?php

include 'koneksi.php';

$nama = $_POST['nama'];
$nis = $_POST['nis'];
$kelas = $_POST['kelas'];
$tanggal = $_POST['tanggal'];
$keterangan = $_POST['keterangan'];
$dateNow = date("Y-m-d");
if($tanggal <= $dateNow){
    $sqlCek = "select * from presensi where nis = $nis and tanggal = '$tanggal'";
    $resCek = mysqli_query($con, $sqlCek);
    $row = mysqli_num_rows($resCek);
    if($row <= 0){
        $sql = "INSERT INTO presensi (nama, nis, kelas, tanggal, keterangan) values ('$nama',$nis,'$kelas','$tanggal','Hadir')";
        $res = mysqli_query($con,$sql);
        if($res){
            header("Location: ../presensi.php?info=Presensi_Sukses");

        } else {
            header("Location: ../presensi.php?info=Presensi_Gagal");
        }
    } else {
        header("Location: ../presensi.php?info=Telah_Presensi");
    }
} else {
    header("Location: ../presensi.php?info=Melebihi_Tanggal_Sekarang");
}






?>