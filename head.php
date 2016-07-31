<?php include 'config/config.php'; ?>
<html lang="en">
 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Pendaftaran</title>
    <script src="js/jquery.min.js"></script>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>
  <nav class="navbar navbar-default">
  
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="index.php">SMKINFONUSA</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
      <?php if(empty($_SESSION['id'])){
        echo "";
      }else{ ?>
         <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Informasi<span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="tampildata_ortu.php">Data Orang Tua</a></li>
            <li><a href="tampildata_pendidikan.php">Data Pendidikan</a></li>
          </ul>
        </li>
        <li><a href="logout.php">Keluar</a></li>
        <?php } ?>
      </ul>
    </div><!-- /.navbar-collapse -->
  </nav>
</div>
   <div class="jumbotron daftar">
        <center><img src="img/tut.png" alt="" width="10%"></center>
        <h1><center>Pendaftaran Siswa Baru</center></h1>
        <h2><center>SMK INFORMATIKA NUSANTARA</center></h2>
        <center><a href="petunjuk.php" class="btn btn-primary btn-lg petunjuk">Baca Petunjuk Pendaftaran</a>
    </div>
<style>

  .navbar-default {
    background-color: #337ab7;
    border-color: #337ab7;
    color: white;
}

.navbar-default .navbar-brand {
    color: white;
}

.navbar-default .navbar-nav>li>a {
    color: white;
}


.jumbotron{
  background-color: springgreen;
}
.navbar-default{
  margin-bottom: 0;
}
</style>
