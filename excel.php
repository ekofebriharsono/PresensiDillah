<!DOCTYPE html>
<html>
<head>
	<title>Export Data Ke Excel Dengan PHP</title>
</head>
<body>
	<style type="text/css">
	body{
		font-family: sans-serif;
	}
	table{
		margin: 20px auto;
		border-collapse: collapse;
	}
	table th,
	table td{
		border: 1px solid #3c3c3c;
		padding: 3px 8px;

	}
	a{
		background: blue;
		color: #fff;
		padding: 8px 10px;
		text-decoration: none;
		border-radius: 2px;
	}
	</style>

    <?php
		$kelas = $_POST['kelas'];
		$tgl_start = $_POST['tanggal_start'];
		$tgl_end = $_POST['tanggal_end'];

		$namaFile = $kelas." ".$tgl_start." sampai ".$tgl_end;
		header("Content-type: application/vnd-ms-excel");
		header("Content-Disposition: attachment; filename=Data $namaFile.xls");

		include 'proses/koneksi.php';
		$query = $_POST['query'];
		$res = mysqli_query($con, $query);
		
		$queryHeaderDate = "select * from presensi where tanggal BETWEEN cast('$tgl_start' as date) and cast('$tgl_end' as date) group by tanggal";
		$resHeaderDate = mysqli_query($con, $queryHeaderDate);
	
	?>

	<center>
		<h1>PRESENSI KELAS <?php echo $kelas; ?> TANGGAL : <?php echo $tgl_start; ?> - <?php echo $tgl_end; ?></h1>
	</center>

	<table border="1">
		<tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <?php while($rowHeaderDate = mysqli_fetch_array($resHeaderDate)){ ?>
            <th><?php echo $rowHeaderDate['tanggal']; ?></th>
            <?php } ?>
        </tr>
        <?php $i = 0; $j=0; while($row = mysqli_fetch_array($res)){ $i++; $j++;?>
        <tr>
			<td><?php echo $row['nis']; ?></td>
			<td><b><?php echo $row['nama']; ?></b></td>
			<td><?php echo $row['kelas']; ?></td>
			<?php 
                              $nisSiswa = $row['nis'];
							  $isHadil = '-';
							  $i = mysqli_query($con, $queryHeaderDate);
                              while($j = mysqli_fetch_array($i)){ 
                                $tanggalSiswa = $j['tanggal'];
                                $queryTanggalPersiswa = "select keterangan from presensi where nis = $nisSiswa and tanggal = '$tanggalSiswa'";
                                $resTanggalPersiswa = mysqli_query($con, $queryTanggalPersiswa);
                                if($resTanggalPersiswa){
									$rowTanggalPersiswa = mysqli_num_rows($resTanggalPersiswa);
									if($rowTanggalPersiswa > 0){
									  $isHadir = 'Hadir';
									} else {
									  $isHadir = '-';
									}
								  } else {
									$isHadir = '-';
								  } ?>
                            <td><?php echo $isHadir; ?></td>
                            <?php } ?>
        </tr>
        <?php  } ?>
		
	</table>
</body>
</html>