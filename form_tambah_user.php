<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah User</title>
</head>
<body>
	<h2>Form Data User baru</h2>
	<form action="tambah_user.php" method="post" enctype="multipart/form-data">
		<input type ="text" name ="id_user" placeholder="id user"><p/>
		<input type="text" name="nm_user" placeholder="nama user"><p/>
		<input type="text" name="email" placeholder="email"><p/>
		<input type="text" name="username" placeholder="Username"><p/>
		<input type="password" name="password" placeholder="Password"><p/>
		<input type="submit" value="Simpan">	
	</form>
</body>
</html>