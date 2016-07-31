<?php include 'head.php';

if(empty($id=$_SESSION['id'])){ ?>
  <script>window.location.href='index.php'</script>
<?php }else{
$result=tampilpendaftar($id);
$result1=tampildataortu($id);
$result2=tampilpendidikan($id);
$result3=tampildok($id);
$result4=tampilpembayaran($id);
?>


<style>
    .block-web.success-box {
        background: #45f5cc;
        padding: 10px;
        /* color: white; */
    }
    
    .block-web.dark-box {
        background: darksalmon;
        padding: 10px;
        margin-top: 1%;
    }
    
    .header {
        background: #89b0d2;
        padding: 10px;
        margin-top: 10%;
        color: white;
    }
    
    .navbar {
        margin-bottom: 0;
    }
    
    .daftar {
        background-color: springgreen;
    }
    
    #kepada {
        background-color: #a2e5f9;
    }

    .konfirm{
      background: aquamarine;
    }
</style>

<div class="container">
    <div class="col-md-6">
        <div class="header">
            <h3>Informasi</h3>
        </div>
        <div class="block-web success-box">

            <div class="porlets-content">
                <?php while ($row=mysqli_fetch_array($result)) { ?>

                <p style="font-weight:bold">Yth Sdr-i.
                    <?php echo strtoupper($row['nama_lengkap']) ?>
                </p>

                <p>Selamat, Anda telah berhasil melakukan Aktivasi Pengisian Formulir. Silahkan melakukan pembayaran sesuai Invoice yang tayang di laman ini.</p>
                <p>Pertanyaan dan Informasi, silahkan kontak Panitia di psb@smkinformatika.sch.id (GTalk/Hangout) atau 0218000063!</p>
            </div>
        </div>

        <div class="header">
            <h3>Progress Pengisian Blanko (Formulir)</h3>
        </div>
        <div class="block-web primary-box">

            <div class="porlets-content">

                <li class="list-group-item">
                <?php if($_SESSION['status']==1){ ?>
                    <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                        ORANG TUA
                    </a>
                <?php }else{?>
                      <a href="orangtua.php" class="btn btn-primary btn-block ">
                        ORANG TUA
                    </a>
                <?php } ?>
                </li>

                <li class="list-group-item">
                <?php

                 if($_SESSION['statusdidik']==1){ ?>
                    <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                       PENDIDIKAN
                    </a>
                <?php }else{?>
                    <a class="btn btn-primary btn-block ">
                        PENDIDIKAN
                    </a>
                <?php } ?>
                </li>

                <li class="list-group-item">
                <?php if($_SESSION['statusdok']==1){ ?>
                    <a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span>
                      DOKUMEN
                    </a>
                <?php }else{?>
                    <a href="dokumen.php" class="btn btn-primary btn-block ">
                        DOKUMEN
                    </a>
                <?php } ?>
                </li>
             
            </div>
        </div>
    </div>


    <div class="col-md-6">
        <div class="header">
            <h3>Rincian Pembayaran</h3>
        </div>
        <div class="block-web success-box" id="kepada">

            <div class="porlets-content">
                <table width=90%>
                    <tr>
                        <td>No Formulir</td>
                        <td>
                            <?php echo preg_replace('/[^a-zA-Z0-9 ]/','',$row['tgl_daftar']."000".$row['id']);?> </td>
                    </tr>
                    <tr>

                        <td>Kepada</td>
                        <td>
                            <?php echo strtoupper($row['nama_lengkap']) ?>
                        </td>
                    </tr>
                    <tr>
                        <td>Tanggal Pengisian Formulir</td>
                        <td>
                            <?php echo $row['tgl_daftar'] ?>
                        </td>
                    </tr>
                </table>

                <div class="table-responsive">
                    <table class="table table-invoice">
                        <thead>
                            <tr>
                                <th>Biaya</th>
                                <th style="width:25%;">Nominal (Rp.)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>Formulir</strong></div>
                                </td>
                                <td class="angka" style="border:0">
                                    200.000 </td>
                            </tr>

                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>Seragam</strong></div>
                                </td>
                                <td class="angka" style="border:0">
                                    500.000 </td>
                            </tr>

                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>Bangunan</strong></div>
                                </td>
                                <td class="angka" style="border:0">
                                    1.680.000 </td>
                            </tr>
                            <tr>
                                <td style="border:0">
                                    <div class="text-primary"><strong>SSP (Sumbangan Pembinaan Pendidikan) 1</strong></div>
                                </td>
                                <td class="angka ssp" style="border:0">
                                    300.000 </td>
                            </tr>

                            <tr id="total-bea">
                                <td>TOTAL BIAYA PENDAFTARAN:</td>
                                <td> 2.680.000</td>
                            </tr>
                            <tr>
                                <td>Status Pembayaran</td>
                                <?php if($_SESSION['statusbayar']==1){ ?>
                                <td><a class="btn btn-success btn-block "><span class="glyphicon glyphicon-ok"></span> Lunas</a></td>
                                <?php }else {?>
                                <td><a class="btn btn-danger btn-block ">Belum Lunas</a></td> 
                                <?php }?>
                            </tr>
                        </tbody>
                    </table>

                </div>

            </div>

        </div>
      </div>
      </div>
<?php } ?>
      <div class="container">     
      <div class="header">
            <h3>Konfirmasi Pembayaran</h3>
      </div>
        <div class="col-md-12 konfirm">
            <form role="form" action="transfer.php" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label>Nama Bank - Atas nama rekening (Contoh : BCA - Atas nama Rian)</label>
                    <div>
                        <input type="text" class="form-control" name="namabank" placeholder="Nama Bank - Atas nama rekening" required>
                    </div>
                </div>
                <div class="form-group">
                    <label>Bukti Transfer</label>
                    <div>
                        <input type="file" name="gambar" class="form-control" required>
                    </div>
                </div>

                <div class="form-group">
                    <div>
                        <button type="submit" name="bayar" class="btn btn-default btn-primary">konfirmasi</button>
                    </div>
            </form>
        </div>
        </div>
        </form></div></div><br>
    <?php } include 'foot.php'; ?>