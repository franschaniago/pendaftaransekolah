<?php include 'head.php';

if(isset($_POST['submit'])){
  $nama=$_POST['nama'];
  $password=$_POST['password'];
  $repassword=$_POST['ulangpassword'];

  if($password==$repassword){
    $passwordmd=md5($password);

      if(simpanadmin($nama,$passwordmd)){
        echo "berhasil";
      }else{
        echo "gagal";
      }
  }else{
    echo "password berbeda";
  }
}

?>

<form method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama Lengkap</label>
    <input type="text" class="form-control" name="nama" placeholder="nama">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" name="password" placeholder="Password">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Ulangi Password</label>
    <input type="password" class="form-control" name="ulangpassword" placeholder="Password">
  </div>

  <button type="submit" name="submit" class="btn btn-success">Tambah</button>
</form>

<?php include 'foot.php';?>
