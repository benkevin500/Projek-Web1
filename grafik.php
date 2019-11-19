<?php
include 'koneksi.php';
$suhu     = mysqli_query($koneksi, "SELECT suhu FROM sensor");
$kec = mysqli_query($koneksi, "SELECT kec_arus FROM sensor");
$sensor = mysqli_query($koneksi, "SELECT suhu,kec_arus FROM sensor");
// $samsung      = mysqli_query($koneksi, "SELECT NamaProduk, Quartal1, Quartal2, Quartal3 FROM Penjualan WHERE NamaProduk='Samsung'");
// $apple      = mysqli_query($koneksi, "SELECT NamaProduk, Quartal1, Quartal2, Quartal3 FROM Penjualan WHERE NamaProduk='Apple'");
// $motorola      = mysqli_query($koneksi, "SELECT NamaProduk, Quartal1, Quartal2, Quartal3 FROM Penjualan WHERE NamaProduk='Motorola'");

 ?>
 
<html>
  <head>
    <meta charset="utf-8">
    <title>Demo Grafik Garis</title>
    <script src="js/Chart.js"></script>
    <style type="text/css">
            .container {
                width: 50%;
                margin: 15px auto;
            }
    </style>
  </head>
  <body>

    <div class="container">
            <canvas id="demobar" width="100" height="100"></canvas>
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
    	            type: 'coloumn',
    	            data: data,
    	            options: {
    	            barValueSpacing: 20,
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
