<!DOCTYPE html>
<html>
<head>
	<title>CETAK PRINT DATA DARI DATABASE DENGAN PHP</title>
</head>
<body>
 
	<center>
 
		<h2>Data Lokasi dan Data Sensor</h2>
		<h4>emang suka error</h4>
 
	</center>
 
	<?php 
	include 'koneksi.php';
	?>
 
	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">Id Lokasi</th>
			<th>Titik Lokasi</th>
			<th>Suhu</th>
			<th width="5%">Kecepatan</th>
		</tr>
		<?php
    $q="SELECT * from sensor";
    $s = mysqli_query($koneksi,$q);
    while($row=mysqli_fetch_array($s)){
        $u="SELECT * FROM lokasi WHERE id_lokasi='$row[0]'";
            $v = mysqli_query($koneksi,$u);
            $x = mysqli_fetch_array($v);
        echo "<tr>
            <td>".$row[0]."</td>
            <td>".$x[1]."</td>
            <td>".$row[1]."</td>
            <td>".$row[2]."</td>
              </tr>";
    }
    ?>
	</table>
 
	<script>
		<?php
	header("Content-type: application/vnd-ms-excel");
	header("Content-Disposition: attachment; filename=Data lokasi dan Data Sensor.xls");
	?>
	</script>
 
</body>
</html>