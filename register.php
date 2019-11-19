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
          <a href="login.html">Login</a>
        </li>
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
  <h2>Form Data User baru</h2>
  <form class="form" action="tambah_user.php" method="post" enctype="multipart/form-data">
    <!--<input class="id" type ="text" name ="id_user" placeholder="id user"><br> -->
    <input class="nm" type="text" name="nm_user" placeholder="nama user"><br>
    <input class="em" type="text" name="email" placeholder="email"><br>
    <input class="us" type="text" name="username" placeholder="Username"><br>
    <input class="pw" type="password" name="password" placeholder="Password"><br>
    <input class="rg" type="submit" value="Register">
  </form>
</section>
</body>
</html>