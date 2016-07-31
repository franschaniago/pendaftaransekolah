<?php include 'head.php'; 
if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{

if(isset($_POST['simpan_foto'])){
  $id_pendaftar=$_SESSION['id'];
  $nama_pendaftar=$_SESSION['nama'];
  $status=1;

  $nama   = $_FILES['foto']['name'];
  $size   = $_FILES['foto']['size'];
  $error  = $_FILES['foto']['error'];
  $asal = $_FILES['foto']['tmp_name'];
  
  $lokasi_foto="img/dokumen/foto/" . $nama;
  $format = pathinfo($nama, PATHINFO_EXTENSION);

  if($error === 0){

    if ($size > 9000){ 
    
          if($format === "jpg" || $format === "png" || $format === "JPG" || $format === "PNG" ){
            
            if(simpanfoto($id_pendaftar,$nama_pendaftar,$lokasi_foto,$status)){
              echo "<script>alert('Foto berhasil di simpan')</script>";
              echo "<script>window.location.href='dokumen.php</script>";
              }else{
                echo "Error: " . $query . "<br>" . mysqli_error($konek);
              } 
    
            move_uploaded_file($asal, "img/dokumen/foto/".$nama);
          }else{
            echo "Maaf format filenya harus jpg/png ";
          }
    
      }else{
        echo "file terlalu besar";
      }
  }else "Ada kesalahan saat upload";
}

?>
<style>

.jumbotron{
  background-color: springgreen;
}

.navbar-default{
  margin-bottom: 0;
}
</style>

  <div class="container">
    <div class="row">
     <div class="col-md-4 petunjuk">
    <div>
      <legend>Formulir Data Dokumen</legend>
      Isilah formulir dokumen ini dengan informasi yang sebenar-benarnya.
    </div>
    <br>
    <div>
      <legend>Formulir Lainnya</legend>

      <a class="btn btn-success btn-block" href="orangtua.php">Orang Tua</a><br>
      <a class="btn btn-success btn-block" href="pendidikan.php">Pendidikan</a><br>
      <a class="btn btn-success btn-block" href="dokumen.php">Dokumen</a><br>
    </div>

    <div>
    <legend>Halaman Utama</legend>
      <legend>
        <a class="btn btn-success btn-block" href="user.php">Rincian</a><br>
      </legend>
    </div>
    </div>
    <form action="dokumen.php" method="post" enctype="multipart/form-data">
      <div class="col-md-8">

        <div class="form-group">
          <label for="exampleInputEmail1">Photo 2x3</label>
          <input type="file" name="foto" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="simpan_foto" class="btn btn-primary"> Simpan Foto </button>
        </div>
        </form>

      <form action="upload_ktp.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">KTP</label>
          <input type="file" name="ktp" class="form-control">
        </div>
        <div class="form-group">
            <button type="submit" name="simpanktp" class="btn btn-primary"> Simpan KTP </button>
        </div>
      </form>
        
      <form action="upload_akte.php" method="post" enctype="multipart/form-data">
        <div class="form-group">
          <label for="exampleInputEmail1">Akte Kelahiran</label>
          <input type="file" name="akte" class="form-control"  >
        </div>
        <div class="form-group">
            <button type="submit" name="simpanakte" class="btn btn-primary"> Simpan Akte </button>
        </div>
      </form>
      
      <form action="upload_ijazah.php" method="post" enctype="multipart/form-data">  
        <div class="form-group">
          <label for="exampleInputEmail1">ijazah</label>
          <input type="file" name="ijazah" class="form-control" >
        </div>
        <div class="form-group">
            <button type="submit" name="simpanijazah" class="btn btn-primary"> Simpan Ijazah </button>
        </div>
      </form>       

      </div>
    </div>
  </div>

    
  <?php }include 'foot.php'; ?>
  