<?php include 'head.php';
if(empty($_SESSION['id'])){ ?>
  <script>window.location.href='login.php'</script>
<?php }else{

$result=tampildataortu();
?>
<link rel="stylesheet" type="text/css" href="dt/css/dataTables.bootstrap.css">

<table class="table table-striped table-bordered table-responsive">
  <thead>
    <tr>
      <th>No</th>
      <th>Pendaftar</th>
      <th>Ayah</th>
      <th>Ibu</th>
      <th>Wali</th>
      <th>Alamat</th>
      <th>Provinsi</th>
      <th>Kota</th>
      <th>Kecamatan</th>
      <th>Pos</th>
      <th>No Hp</th>
      <th>Email</th>
      <th>Pendidikan Ayah</th>
      <th>Pendidikan Ibu</th>
      <th>Pekerjaan Ayah</th>
      <th>Pekerjaan Ibu</th>
      <th>Penghasilan</th>
    </tr>
  </thead>
  
      <tbody>
      
      <?php $no=1; while ($row=mysqli_fetch_assoc($result)) {
        
      ?>
        <tr>
        <td><?= $no; ?></td>
        <td><?= $row['nama_pendaftar'] ?></td>
        <td><?= $row['nama_ayah'] ?></td>
        <td><?= $row['nama_ibu'] ?></td>
        <td><?= $row['nama_wali'] ?></td>
        <td><?= $row['alamat'] ?></td>
        <td><?= $row['provinsi'] ?></td>
        <td><?= $row['kota'] ?></td>
        <td><?= $row['kecamatan'] ?></td>
        <td><?= $row['kodepos'] ?></td>
        <td><?= $row['nohp'] ?></td>
        <td><?= $row['email_ortu'] ?></td>
        <td><?= $row['pendidikan_ayah'] ?></td>
        <td><?= $row['pendidikan_ibu'] ?></td>
        <td><?= $row['pekerjaan_ayah'] ?></td>
        <td><?= $row['pekerjaan_ibu'] ?></td>
        <td><?= $row['penghasilan_ortu'] ?></td>
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
  