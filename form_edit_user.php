<!DOCTYPE html>
<html>
<head>
	<title>Form edit user</title>
	<link rel="stylesheet" type="text/css" href="css/coba.css">	
</head>
<body>
<div class="feu">
	<h2>FORM EDIT USER</h2>
	<?php
		$kiriman = $_GET["username"];
		include "koneksi.php";
		$q = "SELECT * FROM user WHERE username='$kiriman'";
		$result = mysqli_query($koneksi,$q);
		$row = mysqli_fetch_assoc($result);
	?>
		<form class="frm2" action="edit_user.php" method="post" enctype="multipart/form-data">
			<!--<input class="nm1" type="text" name="id_user" placeholder="id user" value="<?php echo $row["id_user"]; ?>"><p/>-->
			<input class="nm1" type="text" name="nm_user" placeholder="nama user" value="<?php echo $row["nm_user"]; ?>"><p/>
			<input class="nm1" type="text" name="email" placeholder="email" value="<?php echo $row["email"]; ?>"><p/>
			<input class="nm1" type="text" name="username" placeholder="Username" value="<?php echo $row["username"]; ?>"><p/>
			<input class="nm1" type="password" name="password" placeholder="Password" value="<?php echo $row["password"]; ?>"><p/>
			<input class="nm2" type="submit" value="Simpan">	
			<input type="hidden" name="nfplama" value="<?php echo $row["foto"]; ?>">
			<input type="hidden" name="id" value="<?php echo $row["Username"]; ?>">
		</form>
</div>
</body>
</html>