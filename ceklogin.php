<?php 

include 'config/config.php';

if(isset($_POST['masuk'])){
	$email=$_POST['email'];
	$no_hp=$_POST['no_hp'];


	if(ceklogin($email,$no_hp)){
		echo "<script>window.location.href='user.php'</script>";
	}else{
		echo "gagal";
	}
}


 ?>