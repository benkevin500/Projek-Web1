<!DOCTYPE html>
<html>
<head>
  
  <title>RPI</title>

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
          <a href="index.html">RPI</a>
        </li>
      </ul>
    </div>
  </section>

<section class="frm">
<h2>Masukan username dan password yang sesuai</h2>
          <?php
            if(isset($_GET['pesan'])){
                if($_GET['pesan'] == "gagal"){
                    echo "Login Gagal, username atau password salah!!";
                }else if($_GET['pesan'] == "logout"){
                    echo "anda telah logout!!";
                }else if ($_GET['pesan'] == "invalid"){
                    echo "sesi anda habis!!";
                }
            }
 ?>
          <form class="form" action="verifikasi.php" method="post">
            <input class="us" type="text" name="username" placeholder="username"><br>
            <input class="pw" type="password" name="password" placeholder="password"><br>
            <input class="rg" type="submit" value="Login">
          </form>
</section>
</body>
</html>