<?php include 'head.php'; 

//echo $_SESSION['nama'];
//echo $_SESSION['id'];
if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
if(isset($_POST['submit'])){
  $nama=$_SESSION['nama'];
  $id_pendaftar=$_SESSION['id'];
  $statusp=$_POST['status'];
  $kota=$_POST['kota'];
  $kecamatan=$_POST['kecamatan'];
  $kodepos=$_POST['kodepos'];
  $namaslta=$_POST['namaslta'];
  $noijazah=$_POST['noijazah'];
  $tahunlulus=$_POST['tahunlulus'];
  $status=1;

  if(simpanpendidikan($nama,$id_pendaftar,$statusp,$kota,$kecamatan,$kodepos,$namaslta,$noijazah,$tahunlulus,$status)){
    echo "<script>alert('Berhasil di simpan')</script>";
  }else{
    echo mysqli_error($konek);
  }

}

?>
<style>


.jumbotron{
  background-color: springgreen;
}
.navbar-default{
  margin-bottom: 0;
}

.form{
  background-color: aliceblue;
}
</style>
  <div class="container">
    <div class="row">

      <div class="col-md-4" id="petunjuk">
       <div>
      <legend>Formulir Pendidikan</legend>
      Isilah formulir Pendidikan ini dengan informasi yang sebenar-benarnya.
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

      <div class="col-md-8 form">
      <div class="header">
      <h3></h3>
      </div>
      <form action="" method="post">

        <div class="form-group">
          <label for="exampleInputEmail1">Status SMP</label>
          <select name="status" class="form-control">
            <option value="0">-- Pilih Status SMP --</option>
            <option value="negeri">Negeri</option>
            <option value="swasta">Swasta</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kota/Kabupaten</label>
          <input type="text" name="kota" class="form-control"  placeholder="Kota/Kabupaten">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kecamatan</label>
          <input type="text" name="kecamatan" class="form-control"  placeholder="Kecamatan">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kode Pos</label>
          <input type="number" name="kodepos" class="form-control"  placeholder="Kode Pos">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Nama SMP</label>
          <input type="text" name="namaslta" class="form-control"  placeholder="Nama SLTA">
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">No ijazah</label>
          <input type="number" name="noijazah" class="form-control"  placeholder="No Ijazah">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Tahun Lulus</label>
          <input type="number" name="tahunlulus" class="form-control"  placeholder="Tahun Lulus">
        </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-block btn-primary" value="Simpan Data Pendidikan">
        </div>
        </form>
      </div>

    </div>
  </div>
<br>
    
  <?php } include 'foot.php'; ?>
