<?php 

include 'head.php';
$id=$_SESSION['id'];
$result=tampilpendidikan_cetak($id);

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
      <td>Status Sekolah SMP</td>
      <td><?= $row['status_slta'] ?></td>
    </tr>

    <tr>
      <td>Kota/kabupaten</td>
      <td><?= $row['kota'] ?></td>
    </tr>

    <tr>
      <td>Kecamatan</td>
      <td><?= $row['kecamatan'] ?></td>
    </tr>

    <tr>
      <td>Kode Pos</td>
      <td><?= $row['kode_pos'] ?></td>
    </tr>

    <tr>
      <td>Nama Sekolah</td>
      <td><?= $row['nama_slta'] ?></td>
    </tr>

    <tr>
      <td>No Ijazah</td>
      <td><?= $row['no_ijazah'] ?></td>
    </tr>

    <tr>
      <td>Tahun Lulus</td>
      <td><?= $row['tahun lulus'] ?></td>
    </tr>
      
        <?php  }?>

  
</table>
<a href="user.php" class="btn btn-success">Kembali</a>
</div>

<div class="col-md-2"></div><br>
<div style="clear: both;</div>
<?php include 'foot.php'; ?>
