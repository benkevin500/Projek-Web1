<?php
    session_start();
    include("koneksi.php");
  	include('tcpdf/tcpdf.php');//library
  	$pdf = new TCPDF('P', PDF_UNIT, "A4", true, 'UTF-8', false);
  	$pdf->SetMargins(20, 20, 20, 20); //2cm
  	$pdf->SetAutoPageBreak(TRUE, 20); //halaman baru
  	$pdf->SetFont('Times', '', 12); // font dan ukuran->tcpdffont
  	$pdf->SetPrintHeader(false);
  	$pdf->SetPrintFooter(false);
  	$pdf->SetAuthor('Sistem Recommender Penangkap Ikan');//properties
  	$pdf->SetTitle('Data Monitoring');//judul diatas pas dibuka
  	$pdf->AddPage(); //insert satu halaman
  	ob_start();//menyiapkan memori penampung konten
  ?>
  <!-- css -->
  <style>
    .bold{ font-weight: bold; }
    .pt11{ font-size: 11pt; }
    .pt12{ font-size: 12pt; }
    .pt14{ font-size: 14pt; }
    .pt16{ font-size: 16pt; }
    .pt18{ font-size: 18pt; }
    .center{ text-align: center;}
  </style>
  <!-- isi -->
  <table>
  <tr>
<!--     <th width="5cm">
      <img src="img/jamm.png" width="5cm"> &nbsp;&nbsp;&nbsp;
    </th> -->
    <th width="6.5cm"> <br><br><br>
      <span class="bold pt18">RPI <br></span>
      <span class="bold pt12"> &nbsp;Recommender Penangkap Ikan</span><br>
      <span class="bold pt12">Oleh : Kelompok 9</span>
    </th>
    <th><br><br><br>
      <div class="pt11" style="border: 1px solid black">
        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
        Anggota Kelompok :<br>
        Benediktus Kevin Mulia<br>
        Daffa' Muhammad Rahman&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<br>
        Zul'ivan Abdillan Zein&nbsp;&nbsp;&nbsp;&nbsp;
      </div>
    </th>
  </tr>
  </table>
  <hr>
    <div class="center">
      <span class="bold pt18">Data Lokasi dan Data Sensor</span><br><br>
      <span class="bold pt14">
      <?php
            include 'koneksi.php';
            $lokasi=(rand(1,10));
            $suhu=(rand(10,55));
            $arus=(rand(70,300));
            $query="REPLACE INTO `sensor` (`id_lokasi`, `suhu`, `kec_arus`) VALUES ('$lokasi', '$suhu', '$arus');";
            $tes=mysqli_query($koneksi,$query);
            ?>
          <table border="1">
    <tr><th>id lokasi</th><th>titik lokasi</th><th>suhu</th><th>Kecepatan</th></tr>
    
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
            <td>".$row[1]." °C</td>
            <td>".$row[2]." cm/s</td>
              </tr>";
    }
    ?>
    </span><br>
      <span class="pt12">
        <?php
          echo "User :".$_SESSION['username'];
         ?>
      </span><br><br><br>

      <!-- tabel -->
      <table border="1">
      <tr>
        <th width="1cm" rowspan="2" valign="middle">No</th>
        <th width="5cm" rowspan="2" valign="middle">Lokasi</th>
        <th width="10.5cm" colspan="2">Hasil Generating</th>
      </tr>
      <tr>
        <td>Suhu</td>
        <td>Kecepatan Arus</td>
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
            <td>".$row[1]." °C</td>
            <td>".$row[2]." cm/s</td>
              </tr>";
    }
    ?>
    </table>
    <h2>Menurut Jurnal Febrry A. Putra, 2016 kecepatan Arus Laut berkisar antara 34-38 cm/s sangat ideal untuk keberadaan ikan</h2>
    <h2>Menurut Block, 1997 Ikan di perairan tropis sering terlihat berada pada lapisan permukaan mixed layer sampai dengan lapisan atas termoklin pada temperatur 20-27°C</h2>
</div>
  <?php
  	$content = ob_get_contents();//mengambil konten dari memori
    ob_end_clean();//hapus isi memori
    $pdf->writeHTML($content, true, false, true, false, '');//membuat file
    $pdf->Output("RPI_REPORT.pdf", 'I');//hasil pdf
