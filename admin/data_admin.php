<?php include 'head.php';

$result=tampiladmin();
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">
  <thead>
  <a href="tambah.php" class="btn btn-primary">Tambah Admin</a>
    <tr>
      <th>No</th>
      <th>Nama Admin</th>
      <th>Hapus</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_admin'] ?></td>
        <td><a href="hapus.php?id=<?= $row['id'] ?>" class="btn btn-danger">Hapus</a></td> 
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

<?php include 'foot.php'; ?>
  