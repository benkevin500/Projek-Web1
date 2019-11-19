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
<h2>Edit Info User</h2>
<header>
    <form class="form" action="lokasi2.php" method="post">
      <input type="text" name="id_user" placeholder="id user" value="<?php echo $row["id_user"]; ?>"><p/>
      <input type="text" name="nm_user" placeholder="nama user" value="<?php echo $row["nm_user"]; ?>"><p/>
      <input type="text" name="email" placeholder="email" value="<?php echo $row["email"]; ?>"><p/>
      <input type="text" name="username" placeholder="Username" value="<?php echo $row["username"]; ?>"><p/>
      <input type="password" name="password" placeholder="Password" value="<?php echo $row["password"]; ?>"><p/>
      <input type="submit" value="Simpan">  
      <input type="hidden" name="nfplama" value="<?php echo $row["foto"]; ?>">
      <input type="hidden" name="id" value="<?php echo $row["Username"]; ?>">
        </header>
    </form>
</section>

<footer>
   <div class="cp1">
     Copyright &copy; Kelompok 9 PWB 2019
   </div>
</footer>
</body>
</html>