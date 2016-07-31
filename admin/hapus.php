<?php

include 'config/config.php';

if(isset($_GET['id'])){
	if(hapus_admin($_GET['id'])){
		echo "<script>document.location.href = 'data_admin.php';</script>";
	}else echo "gagal menghapus data";
}

?>