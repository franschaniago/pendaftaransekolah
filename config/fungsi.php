<?php 

function tampilpendaftar($id){
	global $konek;

	$sql="SELECT * FROM formulir_mhs WHERE id='$id'";
	$result=mysqli_query($konek,$sql) or die('gagal menampilkan data');
	return $result;


}

function tampildataortu($id){
	global $konek;

	$sql="SELECT * FROM `data_orangtua` WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);

	$cek=mysqli_fetch_array($result);
	$_SESSION['status']=$cek['status'];

	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}


}

function tampildok($id){
	global $konek;

	$sql="SELECT * FROM dokumen WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($result);
	$_SESSION['statusdok']=$cek['status'];

	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}


}

function tampilpendidikan($id){
	global $konek;

	$sql="SELECT * FROM pendidikan WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($result);
	$_SESSION['statusdidik']=$cek['status'];

	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}


}

function tampilpembayaran($id){
	global $konek;

	$sql="SELECT * FROM bukti_transfer WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	
	$cek=mysqli_fetch_array($result);
	$_SESSION['statusbayar']=$cek['status'];

	if(mysqli_num_rows($result)>0){
		return true;
	}else{
		return false;
	}


}


//fungsi cetak dokumen
function tampildataortu_cetak($id){
	global $konek;

	$sql="SELECT * FROM `data_orangtua` WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	return $result;
}

function tampildo_cetakk($id){
	global $konek;

	$sql="SELECT * FROM dokumen WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	return $result;
}


function tampilpendidikan_cetak($id){
	global $konek;

	$sql="SELECT * FROM pendidikan WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	return $result;
}

function tampilpembayaran_cetak($id){
	global $konek;

	$sql="SELECT * FROM bukti_transfer WHERE id_pendaftar='$id'";
	$result=mysqli_query($konek,$sql);
	return $result;
}







function daftarformulir($nama,$tempat,$date,$jns_kel,$agama,$nohp,$alamat,$provinsi,$no_jaket,$email,$date){
	global $konek;

	$sql="INSERT INTO `formulir_mhs`(`nama_lengkap`, `tempat_lahir`, `tgl_lahir`, `jenis_kelamin`, `agama`, `no_hp`, `alamat`, `provinsi`, `no_jaket`, `email`, `tgl_daftar`) VALUES ('$nama','$tempat','$date','$jns_kel','$agama','$nohp','$alamat','$provinsi','$no_jaket','$email','$date')";
	
		if (mysqli_query($konek, $sql)) {
		    return true;
		} else {
		    return false;
		}
}

function ceklogin($email,$no_hp){
	global $konek;

	$sql="SELECT * FROM formulir_mhs WHERE email='$email' AND no_hp='$no_hp'";
	$query=mysqli_query($konek,$sql);

	$cek=mysqli_fetch_array($query);
	$_SESSION['id']=$cek['id'];
	$_SESSION['nama']=$cek['nama_lengkap'];

	if(mysqli_num_rows($query)>0){
		return true;
	}else{
		return false;
	}
}

function simpanpendidikan($nama,$id_pendaftar,$statusp,$kota,$kecamatan,$kodepos,$namaslta,$noijazah,$tahunlulus,$status){
	global $konek;

	$sql="INSERT INTO `pendidikan`(`nama_pendaftar`, `id_pendaftar`, `status_slta`, `kota`, `kecamatan`, `kode_pos`, `nama_slta`, `no_ijazah`, `tahun lulus`,`status`) VALUES('$nama','$id_pendaftar','$statusp','$kota','$kecamatan','$kodepos','$namaslta','$noijazah','$tahunlulus','$status')";
	
		if (mysqli_query($konek, $sql)) {
		    return true;
		} else {
		    return false;
		}	
}

function simpandataortu($namapendaftar,$id_pendaftar,$ayah,$ibu,$wali,$alamat,$provinsi,$kota,$kecamatan,$kodepos,$nohp,$email_ortu,$pendidikan_ayah,$pendidikan_ibu,$pekerjaan_ayah,$pekerjaan_ibu,$penghasilan_ortu,$status){
	global $konek;
	
	$sql="INSERT INTO `data_orangtua`(`nama_pendaftar`, `id_pendaftar`, `nama_ayah`, `nama_ibu`, `nama_wali`, `alamat`, `provinsi`, `kota`, `kecamatan`, `kodepos`, `nohp`, `email_ortu`, `pendidikan_ayah`, `pendidikan_ibu`, `pekerjaan_ayah`, `pekerjaan_ibu`, `penghasilan_ortu`,`status`) VALUES ('$namapendaftar','$id_pendaftar','$ayah','$ibu','$wali','$alamat','$provinsi','$kota','$kecamatan','$kodepos','$nohp','$email_ortu','$pendidikan_ayah','$pendidikan_ibu','$pekerjaan_ayah','$pekerjaan_ibu','$penghasilan_ortu','$status')";
	if (mysqli_query($konek, $sql)) {
		    return true;
		} else {
		    return false;
		}
}

function simpantransaksi($id,$nama_pendaftar,$namabank,$lokasi){
	global $konek;

	$sql="INSERT INTO `bukti_transfer`(`id_pendaftar`, `nama_pendaftar`, `nama_bank`, `bukti_transfer`) VALUES ('$id','$nama_pendaftar','$namabank','$lokasi')";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}
}

function simpanfoto($id_pendaftar,$nama_pendaftar,$lokasi_foto,$status){
	global $konek;

	$sql="INSERT INTO `dokumen`(`id_pendaftar`, `nama_pendaftar`, `foto`,`status`) VALUES ('$id_pendaftar','$nama_pendaftar','$lokasi_foto','$status')";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}
}	

function simpanktp($id_pendaftar,$lokasi_foto){
	global $konek;

	$sql="UPDATE `dokumen` SET `ktp`='$lokasi_foto' WHERE id_pendaftar='$id_pendaftar'";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}
}

function simpanakte($id_pendaftar,$lokasi_foto){
	global $konek;

	$sql="UPDATE `dokumen` SET `akte`='$lokasi_foto' WHERE id_pendaftar='$id_pendaftar'";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}
}

function simpanijazah($id_pendaftar,$lokasi_foto){
	global $konek;

	$sql="UPDATE `dokumen` SET `ijazah`='$lokasi_foto' WHERE id_pendaftar='$id_pendaftar'";
	if(mysqli_query($konek, $sql)){
		return true;
	}else{
		return false;
	}	
}


 ?>