<?php 

include 'head.php';
$id=$_SESSION['id'];
$result=tampildataortu_cetak($id);

?>

<style>
	.navbar-default{
		display: none;
	}
</style>

<div class="col-md-3"></div>

<div class="col-md-6">
<table class="table table-striped table-bordered table-responsive">
<?php while ($row=mysqli_fetch_assoc($result)) { ?>

    <tr>
      <td>Nama Ayah</td>
      <td><?= $row['nama_ayah'] ?></td>
    </tr>

    <tr>
      <td>Nama Ibu</td>
      <td><?= $row['nama_ibu'] ?></td>
    </tr>

    <tr>
      <td>Nama Wali</td>
      <td><?= $row['nama_wali'] ?></td>
    </tr>

    <tr>
      <td>Alamat</td>
      <td><?= $row['alamat'] ?></td>
    </tr>

    <tr>
      <td>Provinsi</td>
      <td><?= $row['provinsi'] ?></td>
    </tr>

    <tr>
      <td>Kota</td>
      <td><?= $row['kota'] ?></td>
    </tr>

    <tr>
      <td>Kecamatan</td>
      <td><?= $row['kecamatan'] ?></td>
    </tr>

    <tr>
      <td>Kode Pos</td>
      <td><?= $row['kodepos'] ?></td>
     </tr>

    <tr>
      <td>No Hp</td>
      <td><?= $row['nohp'] ?></td>
</tr>
    <tr>
      <td>Email</td>
      <td><?= $row['email_ortu'] ?></td>
</tr>
    <tr>
      <td>Pendidikan Ayah</td>
      <td><?= $row['pendidikan_ayah'] ?></td>
</tr>
    <tr>
      <td>Pendidikan Ibu</td>
      <td><?= $row['pendidikan_ibu'] ?></td>
</tr>
    <tr>
      <td>Pekerjaan Ayah</td>
      <td><?= $row['pekerjaan_ayah'] ?></td>
</tr>
    <tr>
      <td>Pekerjaan Ibu</td>
      <td><?= $row['pekerjaan_ibu'] ?></td>
</tr>
    <tr>
      <td>Penghasilan Orangtua</td>
      <td><?= $row['penghasilan_ortu'] ?></td>
    </tr>
      
        <?php  }?>

  
</table>
<a href="user.php" class="btn btn-success">Kembali</a>
</div>

<div class="col-md-2"></div><br>
<div style="clear: both;</div>
<?php include 'foot.php'; ?>
