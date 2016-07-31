<?php include 'head.php';


if(empty($id=$_GET['id'])){

}else{
$result=tampilpembayaranperid($id);
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pendaftar</th>
      <th>Nama Bank</th>
      <th>Perikas</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar'] ?></td>
        <td><?= $row['nama_bank'] ?></td>
        <td><div class="form-group">

        <?php if (isset($_POST['submit'])) {
              $transaksi=$_POST['transaksi'];

              if(simpancekbayar($transaksi,$id)){
                echo "<script>window.location.href='data_pembayaran.php'</script>";
              }else{
                echo "gagal";
              }
             } ?>
        <form action="" method="post" accept-charset="utf-8">
              <select name="transaksi" class="form-control" id="sel1">
                  <option value="0">Transaksi Di Tolak</option>
                  <option value="1">Transaksi Di Terima</option>

              </select><br>
            <input class="btn btn-primary" type="submit" name="submit" value="Simpan">
        </form>
        </td>
        <img src="../<?= $row['bukti_transfer'] ?>">
        </tr>
        <?php $no++; }?>

      </tbody>
    
  </thead>
</table>


<script src="dt/js/jquery.dataTables.min.js"></script>
<script src="dt/js/dataTables.bootstrap.js"></script>
        <script>
            $(document).ready( function () {
          $('#pendaftar').DataTable({
            responsive:true
          });
      } );
        </script>
</head>

<?php } include 'foot.php'; ?>
  