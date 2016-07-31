<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{
$result=tampilpendaftar();
$_SESSION['nama'];
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered">

  <thead>
    <tr>
      <th>No</th>
      <th>Nama Lengkap</th>
      <th>Tempat Lahir</th>
      <th>Tgl Lahir</th>
      <th>Jenis Kelamin</th>
      <th>Agama</th>
      <th>No HP</th>
      <th>Alamat</th>
      <th>Provinsi</th>
      <th>Ukuran Jaket</th>
      <th>Email</th>
      <th>Tgl Daftar</th>
    </tr>
  </thead>

    
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_lengkap'] ?></td>
        <td><?= $row['tempat_lahir'] ?></td>
        <td><?= $row['tgl_lahir'] ?></td>
        <td><?= $row['jenis_kelamin'] ?></td>
        <td><?= $row['agama'] ?></td>
        <td><?= $row['no_hp'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['provinsi'] ?></td>
        <td><?= $row['no_jaket'] ?></td>
        <td><?= $row['email'] ?></td>
        <td><?= $row['tgl_daftar'] ?></td>
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
  