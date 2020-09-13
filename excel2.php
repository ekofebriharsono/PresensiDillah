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

    $namaFile = $kelas." ".$tgl_start."-".$tgl_end;
	header("Content-type: application/vnd-ms-excel");
    header("Content-Disposition: attachment; filename=Data $namaFile.xls");

    include 'proses/koneksi.php';
    $query = $_POST['query'];
    $res = mysqli_query($con, $query);
	?>

	<center>
		<h1>PRESENSI KELAS <?php echo $kelas; ?> TANGGAL : <?php echo $tgl_start; ?> - <?php echo $tgl_end; ?></h1>
	</center>

	<table border="1">
		<tr>
            <th>NIS</th>
            <th>NAMA</th>
            <th>KELAS</th>
            <th>TANGGAL</th>
            <th>KET</th>
        </tr>
        <?php while($row = mysqli_fetch_array($res)){ ?>
        <tr>
			<td><?php echo $row['nis']; ?></td>
			<td><b><?php echo $row['nama']; ?></b></td>
			<td><?php echo $row['kelas']; ?></td>
			<td><?php echo $row['tanggal']; ?></td>
			<td><?php echo $row['keterangan']; ?></td>
        </tr>
        <?php  } ?>
		
	</table>
</body>
</html>