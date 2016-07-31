<?php include 'head.php'; 
if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{

if(isset($_POST['submit'])){
  $namapendaftar=$_SESSION['nama'];
  $id_pendaftar=$_SESSION['id'];
  $ayah=$_POST['nama_ayah'];
  $ibu=$_POST['nama_ibu'];
  $wali=$_POST['nama_wali'];
  $alamat=$_POST['alamat'];
  $provinsi=$_POST['provinsi'];
  $kota=$_POST['kota'];
  $kecamatan=$_POST['kecamatan'];
  $kodepos=$_POST['kodepos'];
  $nohp=$_POST['no_hp'];
  $email_ortu=$_POST['email_ortu'];
  $pendidikan_ayah=$_POST['pendidikan_ayah'];
  $pendidikan_ibu=$_POST['pendidikan_ibu'];
  $pekerjaan_ayah=$_POST['pekerjaan_ayah'];
  $pekerjaan_ibu=$_POST['pekerjaan_ibu'];
  $penghasilan_ortu=$_POST['penghasilan_ortu'];
  $status=1;

  if(simpandataortu($namapendaftar,$id_pendaftar,$ayah,$ibu,$wali,$alamat,$provinsi,$kota,$kecamatan,$kodepos,$nohp,$email_ortu,$pendidikan_ayah,$pendidikan_ibu,$pekerjaan_ayah,$pekerjaan_ibu,$penghasilan_ortu,$status)){ 
  echo "<script>alert('Penyimpanan Berhasil')</script>";
  }else{
    echo mysqli_error($konek);
  }
}

?>
<link rel='stylesheet' href='sweet/sweetalert.css'>
<script src='sweet/sweetalert.min.js'></script>

<style>

.jumbotron{
  background-color: springgreen;
}
.navbar-default{
  margin-bottom: 0;
}

.form{
  
  padding: 10px;
  background-color: aliceblue;
}


</style>

  <div class="container">
  <div class="container">
  <div class="block-web primary-box">
    
  </div>
</div>
    <div class="row" style="margin-right:0px;margin-left:0px;">
    <div class="col-md-4 petunjuk">
    <div>
      <legend>Formulir Data Orang tua</legend>
      Isilah formulir orang tua ini dengan informasi yang sebenar-benarnya.
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
   
    <form action="" method="post">
      

        <div class="form-group">
          <label >Nama Ayah</label>
          <input type="text" class="form-control" name="nama_ayah"  placeholder="Nama Ayah" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Ibu</label>
          <input type="text" class="form-control" name="nama_ibu"  placeholder="Nama Ibu" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Nama Wali</label>
          <input type="text" class="form-control" name="nama_wali"  placeholder="Nama Wali">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Alamat orang tua</label>
          <textarea required name="alamat" cols="50" rows="3" class="form-control" placeholder="Isikan dengan Alamat Rumah"></textarea>
        </div>

          <div class="form-group">
          <label for="exampleInputEmail1">Propinsi</label>
          <select required name="provinsi" id="provinsi" class="form-control">
              <option value=""> -- Pilih Propinsi -- </option>
              <option value="jakarata">D.K.I. Jakarta</option>
              <option value="jawabarat">Jawa Barat</option>
              <option value="jawatengah">Jawa Tengah</option>
              <option value="yogyakarta">D.I. Yogyakarta</option>
              <option value="jawatimur">Jawa Timur</option>
              <option value="aceh">Aceh</option>
              <option value="sumaterautara">Sumatera Utara</option>
              <option value="sumaterabarat">Sumatera Barat</option>
              <option value="riau">Riau</option>
              <option value="jambi">Jambi</option>
              <option value="sumateraselatan">Sumatera Selatan</option>
              <option value="lampung">Lampung</option>
              <option value="kalimantanbarat">Kalimantan Barat</option>
              <option value="kalimantantengah">Kalimantan Tengah</option>
              <option value="kalimantanselatan">Kalimantan Selatan</option>
              <option value="kalimantantimur">Kalimantan Timur</option>
              <option value="sulawesiutara">Sulawesi Utara</option>
              <option value="sulawesitengah">Sulawesi Tengah</option>
              <option value="sulawesiselatan">Sulawesi Selatan</option>
              <option value="sulawesitenggara">Sulawesi Tenggara</option>
              <option value="maluku">Maluku</option>
              <option value="bali">Bali</option>
              <option value="nusatenggarabarat">Nusa Tenggara Barat</option>
              <option value="nusatenggaratimur">Nusa Tenggara Timur</option>
              <option value="papua">Papua</option>
              <option value="bengkulu">Bengkulu</option>
              <option value="malukuutara">Maluku Utara</option>
              <option value="banten">Banten</option>
              <option value="bangkabelitung">Bangka Belitung</option>
              <option value="gorontalo">Gorontalo</option>
              <option value="kepulauanriau">Kepulauan Riau</option>
              <option value="papuabarat">Papua Barat</option>
              <option value="sulawesibarat">Sulawesi Barat</option>
            </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kota/Kabupaten</label>
          <input type="text" class="form-control" name="kota"  placeholder="Kota / Kabupaten" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kecamatan</label>
          <input type="text" class="form-control" name="kecamatan"  placeholder="kecamatan" required>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Kode Pos</label>
          <input required type="number" name="kodepos" class="form-control"  placeholder="Kode Pos">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">No Handphone</label>
          <input required type="number" name="no_hp" class="form-control"  placeholder="No Handphone">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Email Orang Tua/Wali</label>
          <input type="email" name="email_ortu" class="form-control"  placeholder="email orang tua">
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Pendidikan Ayah</label>
          <select required name="pendidikan_ayah" id="agama" class="form-control">
            <option value="0"> -- Pilih Pendidikan -- </option>
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma">SMA</option>
            <option value="d3">D3</option>
            <option value="s1">S1</option>
            <option value="s2">S2</option>
            <option value="s3">S3</option>
          </select>
        </div>
        
        <div class="form-group">
          <label for="exampleInputEmail1">Pendidikan Ibu</label>
          <select required name="pendidikan_ibu" id="agama" class="form-control">
            <option value="0"> -- Pilih Pendidikan -- </option>
            <option value="sd">SD</option>
            <option value="smp">SMP</option>
            <option value="sma">SMA</option>
            <option value="d3">D3</option>
            <option value="s1">S1</option>
            <option value="s2">S2</option>
            <option value="s3">S3</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Pekerjaan Ayah</label>
          <select required name="pekerjaan_ayah" class="form-control">
            <option value="0"> -- Pilih Pekerjaan -- </option>
            <option value="swasta">Karyawan swasta</option>
            <option value="pns">Pegawai Negeri</option>
            <option value="wirausaha">Wirausaha</option>
            <option value="tidak bekerja">Tidak Bekerja</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Pekerjaan Ibu</label>
          <select required name="pekerjaan_ibu" id="agama" class="form-control">
            <option value="0"> -- Pilih Pekerjaan -- </option>
            <option value="swasta">Karyawan swasta</option>
            <option value="pns">Pegawai Negeri</option>
            <option value="wirausaha">Wirausaha</option>
            <option value="tidak bekerja">Tidak Bekerja</option>
          </select>
        </div>

        <div class="form-group">
          <label for="exampleInputEmail1">Penghasilan Orang Tua</label>
          <select required name="penghasilan_ortu" id="agama" class="form-control">
            <option value="0"> -- Pilih Penghasilan -- </option>
            <option value="under 1jt">Dibawah 1.000.000</option>
            <option value="1-3jt">1.000.000 - 3.000.000</option>
            <option value="3-5jt">3.000.000 - 5.000.000</option>
            <option value="5jt +">Diatas 5.000.000</option>
          </select>
        </div>

        <div class="form-group">
            <input type="submit" name="submit" class="btn btn-block btn-lg btn-primary" value="Simpan Data Orang Tua">
          </div>
        </form>

     

      </div>
    </div>
  </div><br>


    
<?php }
   include 'foot.php'; ?>
