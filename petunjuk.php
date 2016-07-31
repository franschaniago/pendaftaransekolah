<?php include 'head.php'; ?>
  <link rel="stylesheet" href="css/jquery-ui.css">
  <script src="js/jquery.js"></script>
  <script src="js/jquery-ui.js"></script>

  <style>

.jumbotron{
  background-color: springgreen;
}

.navbar-default{
  margin-bottom: 0;
}
</style>
<script>
  $(function() {
    $( "#accordion" ).accordion();
  });
  </script>
  <div class="container">
<div id="accordion">
  <h3>Isi Formulir</h3>
  <div>
    <p>
    Lengkapi Formulir untuk dapat menerima akses masuk ke tahap selanjutnya
    </p>
  </div>
  <h3>Isi data pendidikan</h3>
  <div>
    <p>
    Jika pengisian formulir berhasil isilah data pendidikan dengan sebenar-benarnya
    </p>
  </div>
  <h3>Isi data orang tua</h3>
  <div>
    <p>
    Jika pengisian berhasil isilah data orang tua dengan sebenar benarnya
    </p>
  </div>
  <h3>Upload Dokumen</h3>
  <div>
    <p>Upload beberapa dokumen yang diperlukan sebagai bahan perlengkapan data
    </p>
  </div>
  <h3>Pembayaran</h3>
  <div>
    <p>Lakukan Pembayaran sesuai nominal yang tertera
    </p>
  </div>
</div>
 </div>
 <br>


<?php include 'foot.php'; ?>