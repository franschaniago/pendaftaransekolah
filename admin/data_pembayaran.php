<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{
$result=tampilpembayaran();
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pendaftar</th>
      <th>Nama Bank</th>
      <th>Status</th>
      <th>Periksa</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar'] ?></td>
        <td><?= $row['nama_bank'] ?></td>
        <td><?php if($row['status']==1){ ?>
          <a class="btn btn-success">Lunas</a>
          <?php }else{?>
            <a class="btn btn-danger">Ditolak / Belum diperiksa</a>
          <?php } ?>
        </td>
        <td><a href="periksa_bayar.php?id=<?= $row['id_pendaftar']?>" class="btn btn-primary">Periksa</a></td>
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

<?php }include 'foot.php'; ?>
  