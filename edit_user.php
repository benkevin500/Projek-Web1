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
          <a href="login.html">Login</a>
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

<section class="frm1">

<?php
	include "koneksi.php";
// 	$a = $_POST["id_user"];
	$b = $_POST["nm_user"];
	$c = $_POST["email"];
	$d = $_POST["username"];
	$e = $_POST["password"];

	


    $q = "UPDATE `user` SET `nm_user`='$b',`email`='$c',`username`='$d',`password`='$e' WHERE `user`.`username`= '$d'";
    mysqli_query($koneksi,$q);

echo "Data user $b sudah disimpan."; 
?>
<p/>
<a href="tampil.php">Daftar User</a>
</section>
<footer>
   <div class="cp1">
     Copyright &copy; Kelompok 9 PWB 2019
   </div>
</footer>
</body>
</html>