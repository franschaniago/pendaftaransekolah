<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{
$result=tampilpendidikan();

?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">
  <thead>
    <tr>
      <th>No</th>
      <th>Nama Pendaftar</th>
      <th>Status SMP</th>
      <th>Kota</th>
      <th>Kecamatan</th>
      <th>Kode Pos</th>
      <th>Nama SMP</th>
      <th>No Ijazah</th>
      <th>Tahun Lulus</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar'] ?></td>
        <td><?= $row['status_slta'] ?></td>
        <td><?= $row['kota'] ?></td>
        <td><?= $row['kecamatan'] ?></td>
        <td><?= $row['kode_pos'] ?></td>
        <td><?= $row['nama_slta'] ?></td>
        <td><?= $row['no_ijazah'] ?></td>
        <td><?= $row['tahun lulus'] ?></td>
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
  