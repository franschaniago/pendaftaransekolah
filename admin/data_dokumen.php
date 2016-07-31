<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{
$result=tampildokumen();
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama</th>
      <th>Foto</th>
      <th>Ktp</th>
      <th>Akte</th>
      <th>Ijazah</th>

    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar']?></td>
        <td><a href="../<?= $row['foto'] ?>">Lihat Foto</a></td>
        <td><a href="../<?= $row['ktp'] ?>">Lihat KTP</a></td>
        <td><a href="../<?= $row['akte'] ?>">Lihat Akte</a></td>
        <td><a href="../<?= $row['ijazah'] ?>">Lihat Ijazah</a></td>
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
  