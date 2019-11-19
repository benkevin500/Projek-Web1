<!DOCTYPE html>
<html>
<head>
  
  <title>Hasil</title>

  <link rel="stylesheet" type="text/css" href="css/coba.css">
</head>

<body>
  <section id="menu2">
    <div class="kanan">
      <ul>
        <li>
          <a href="login.php">Logout</a>
        </li>
        <li>
          <a href="excel.php">download excel</a>
        </li>
        <li>
          <a href="pdf.php">download pdf</a>
        </li>
      </ul>
    </div>
    <div class="kiri">
      <ul>
        <li>
          <a href="#menu2">RPI</a>
        </li>
      </ul>
    </div>
  </section>



<section class="frm">
    
<h2>List Lokasi</h2>
<header>
    <form class="form" method="post">
        
            <?php
            include 'koneksi.php';
            $lokasi=(rand(1,10));
            $suhu=(rand(10,55));
            $arus=(rand(3,75));
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
</table>
    </form>
 <form class="form1" method="post">
     <?php
include 'koneksi.php';
$suhu     = mysqli_query($koneksi, "SELECT suhu FROM sensor");
$kec = mysqli_query($koneksi, "SELECT kec_arus FROM sensor");
$sensor = mysqli_query($koneksi, "SELECT suhu,kec_arus FROM sensor");
// $samsung      = mysqli_query($koneksi, "SELECT NamaProduk, Quartal1, Quartal2, Quartal3 FROM Penjualan WHERE NamaProduk='Samsung'");

 ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Grafik Garis</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 490px;
                /*margin: auto;*/
            }
    </style>
  </head>
  <body>
    <div class="container">
            <canvas id="demobar" width="100" height="40"></canvas>
    </div>
      	<script  type="text/javascript">
    	  var ctx = document.getElementById("demobar").getContext("2d");
    	  var data = {
    	            labels: ["id 1","id 2","id 3","id 4","id 5","id 6","id 7","id 8","id 9","id 10"],
    	            datasets: [
    	            {
    	              label: "Suhu",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(59, 100, 222, 1)",
                    borderColor: "rgba(59, 100, 222, 1)",
                    pointHoverBackgroundColor: "rgba(59, 100, 222, 1)",
						        pointHoverBorderColor: "rgba(59, 100, 222, 1)",
    	              data: [<?php while ($p = mysqli_fetch_array($suhu)) { echo '"' . $p[0] . '",';}?>]
    	            },
                  {
    	              label: "Kecepatan Arus",
                    fill: false,
                    lineTension: 0.1,
                    backgroundColor: "rgba(203, 222, 225, 0.9)",
                    borderColor: "rgba(203, 222, 225, 0.9)",
                    pointHoverBackgroundColor: "rgba(203, 222, 225, 0.9)",
						        pointHoverBorderColor: "rgba(203, 222, 225, 0.9)",
    	              data: [<?php while ($q = mysqli_fetch_array($kec)) { echo '"' . $q[0] . '",';}?>]
    	           }
    	            ]
    	            };

    	  var myBarChart = new Chart(ctx, {
    	            type: 'line',
    	            data: data,
    	            options: {
    	            barValueSpacing: 10,
    	            scales: {
    	              yAxes: [{
    	                  ticks: {
    	                      min: 0,
    	                  }
    	              }],
    	              xAxes: [{
    	                          gridLines: {
    	                              color: "rgba(0, 0, 0, 0)",
    	                          }
    	                      }]
    	              }
    	          }
    	        });
    	</script>
  </body>
</html>
 </form> 
 </header>
</section>

<footer>
   <div class="cp1">
     Copyright &copy; Kelompok 9 PWB 2019
   </div>
</footer>
</body>
</html>