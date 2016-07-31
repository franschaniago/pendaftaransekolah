<?php 

function ceklogin($nama,$password){
	global $konek;

	$sql="SELECT * FROM admin WHERE nama_admin='$nama' AND password='$password'";
	$query=mysqli_query($konek,$sql);

	$cek=mysqli_fetch_array($query);
	$_SESSION['id']=$cek['id'];
	$_SESSION['nama']=$cek['nama_admin'];

	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function hapus_admin($id){
	global $konek;
	$query="DELETE FROM admin WHERE id=$id";
	if(mysqli_query($konek,$query)) return true;
	else return false;
}


function tampilpendaftar(){
	global $konek;

	$sql="SELECT * FROM formulir_mhs";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilpendidikan(){
	global $konek;

	$sql="SELECT * FROM pendidikan";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampildataortu(){
	global $konek;

	$sql="SELECT * FROM data_orangtua";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;
}

function tampilpembayaran(){
	global $konek;

	$sql="SELECT * FROM bukti_transfer";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;
}

function tampiladmin(){
	global $konek;

	$sql="SELECT * FROM admin";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;	
}

function tampildokumen(){
	global $konek;

	$sql="SELECT * FROM dokumen";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;	
}

function tampilpembayaranperid($id){
	global $konek;

	$sql="SELECT * FROM bukti_transfer WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql) or die(mysqli_error($konek));
	return $result;
}

function simpancekbayar($transaksi,$id){
	global $konek;

	$sql="UPDATE `bukti_transfer` SET `status`='$transaksi' WHERE id_pendaftar='$id'";
	if(mysqli_query($konek,$sql)) return true;
	else return false;
}

function simpanadmin($nama,$passwordmd){
	global $konek;

	$sql="INSERT INTO `admin`(`nama_admin`, `password`) VALUES ('$nama','$passwordmd')";
	if (mysqli_query($konek, $sql)) {
    	return true;
	} else {
    	return false;
	}
}

 ?>