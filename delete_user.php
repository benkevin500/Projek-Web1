<!--Anda yakin ingin menghapus data?<br>-->
<?php
include "koneksi.php";
    if(isset($_GET["pil"])){
 		if($_GET["pil"]=="t"){
 		    ?>
 			<script>
 			location.href = 'tampil.php';
 			</script>
 			<?php
 		}else{
 		    $username = $_GET['username'];
 			$q = "DELETE FROM `user` WHERE `username` = '$username'";
 			mysqli_query($koneksi,$q);
 			?>
 			<script>
 			location.href = 'tampil.php';
 			</script>
 			<?php
 		}
 	}
 	
//       $kiriman = $_GET["username"];		
	  
// 	  $q = "SELECT * FROM user WHERE username='$kiriman'";
// 	  $result = mysqli_query($koneksi,$q);
// 	  $row = mysqli_fetch_assoc($result);
// 	  foreach($row as $field)
// 			echo " $field&nbsp;&nbsp;&nbsp;";
// ?>
<!--<h2><a href="delete_user.php?pil=y&username<?php echo $kiriman; ?>">YA</a> / -->
<!--    <a href="delete_user.php?pil=t&username<?php echo $kiriman; ?>">TIDAK</a><h2>-->
