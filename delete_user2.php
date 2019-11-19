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
          <a href="login.html">Logout</a>
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
<h2>Daftar User</h2>
    <form class="form" method="post">
      Anda yakin ingin menghapus data?<br>
<?php
      $kiriman = $_GET["username"];   
    include "koneksi.php";
    $q = "SELECT * FROM user WHERE id_user='$kiriman'";
    $result = mysqli_query($koneksi,$q);
    $row = mysqli_fetch_assoc($result);
    foreach($row as $field)
      echo " $field&nbsp;&nbsp;&nbsp;";
?>
<h2><a href="delete_user.php?pil=y&username=<?php echo $kiriman; ?>">YA</a> 
    <a href="delete_user.php?pil=t&username=<?php echo $kiriman; ?>">TIDAK</a><h2>

 <?php
//   if(isset($_GET["pil"])){
//     if($_GET["pil"]=="t")
//       header("location:tampil.php");
//     else{
//       $q = "DELETE FROM user WHERE user.id_user = '$kiriman'";
//       mysqli_query($koneksi,$q);
//       header("location:tampil.php");
//     }
//   }
 ?> 
    </form>
</section>

<footer>
   <div class="cp1">
     Copyright &copy; Kelompok 9 PWB 2019
   </div>
</footer>
</body>
</html>