<?php
	include_once ("koneksi.php");
	$ok=true;

	if(empty($_GET["suhu"])){
		$ok=false;} else $suhu=$_GET["suhu"];

	if(empty($_GET["kec_arus"])){
		$ok=false;} else $kec_arus=$_GET["kec_arus"];

	if(!$ok){
		echo "error";
		exit();}

	$sql = "INSERT INTO `sensor` (`suhu`, `kec_arus`) VALUES ('$suhu','$kec_arus')";
	$hasil = mysqli_query($koneksi,$sql);
?>
