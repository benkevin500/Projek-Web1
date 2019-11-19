<?php
    include "koneksi.php";
	$n1 = $_POST['username'];
	$n2 = $_POST['password'];
	$q = "SELECT * FROM user WHERE username='$n1' AND password='$n2'";
	$hsl = mysqli_query($koneksi,$q);
	
	if($r = mysqli_fetch_assoc($hsl)){
	    session_start();
		$_SESSION['username'] = $r['username'];
		header("location:hasil.php");
	}
	else
		header("location:login.php?pesan=yang bener atuh");

?>
