<?php
// memulai session
include "koneksi.php";
session_start();
error_reporting(0);
if (isset($_SESSION['username']))
{
	if ($_SESSION['username'] == "rahman")
   { 
     header('location:tampil.php?pesan=andaadmin');
   }
   else
       header('location:tampil.php?pesan=andabukanadmin');
   
 ?>