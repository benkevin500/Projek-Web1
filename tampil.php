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
          <a href="index.html">Home</a>
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
      <a class="rg1" href="register.php">tambah user baru</a><p/></br>
      <a class="lg1" href="login.html">Login</a></br></br>
        <?php
          include "koneksi.php";
          $q = "SELECT id_user,nm_user,email,username FROM user";
          $result = mysqli_query($koneksi,$q);
          while($row = mysqli_fetch_assoc($result)){
            foreach($row as $field)
              echo " $field&nbsp;&nbsp;&nbsp;";
            ?>
      <a class="ed1" href="form_edit_user.php?username=<?php echo $row["username"]; ?>">edit</a>
      <a class="dl1" href="delete_user2.php?username=<?php echo $row["username"]; ?>">delete</a>   
            <?php
            echo "<br/>";
          }
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