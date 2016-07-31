<?php include 'head.php'; 

if(isset($_POST['simpanktp'])){
  $id_pendaftar=$_SESSION['id'];

  $nama   = $_FILES['ktp']['name'];
  $size   = $_FILES['ktp']['size'];
  $error  = $_FILES['ktp']['error'];
  $asal = $_FILES['ktp']['tmp_name'];
  
  $lokasi_foto="img/dokumen/ktp/" . $nama;
  $format = pathinfo($nama, PATHINFO_EXTENSION);

  if($error === 0){

    if ($size > 9000){ 
    
          if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
            
            if(simpanktp($id_pendaftar,$lokasi_foto)){
              echo "<script>window.location.href='dokumen.php'</script>";
              }else{
                echo mysqli_error($konek);
              } 
    
            move_uploaded_file($asal, "img/dokumen/ktp/".$nama);
          }else{
            echo "Maaf format filenya harus jpg/png ";
          }
    
      }else{
        echo "file terlalu besar";
      }
  }else "Ada kesalahan saat upload";
}

?>