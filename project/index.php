<?php
include("config.php");

include("auth.php"); //include auth.php file on all secure pages 
?>

<!DOCTYPE html>

<html>

<head>

  <title>Beranda</title>

  <meta charset="utf-8">

  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php include("include/css.php"); ?>

</head>

<body>

  <header>

    <?php include("include/header.php"); ?>

  </header>

  <div class='container' style='margin-top:70px'>

    <div class='row' style='min-height:520px'>

      <div class='col-md-12'>

        <div class="jumbotron">

          <center>
          
          <p><img src="image/logo.png"  style="width:200px;height:150px;"></p>


            <p>Selamat Datang DI</p>

            <p> Aplikasi Sistem Informasi & Laporan Data Mahasiswa</p>

            <p>UNIVERSITAS PELITA BANGSA</p>
         
              <a class='btn btn-primary' href='petani.php'>Data Mahasiswa</a>

              <a class='btn btn-info' href='sawit.php'>Menu Trigger</a>

              <a class='btn btn-danger' href='transaksi.php'>Tambah Data Mahasiswa</a>

              <a class='btn btn-success' href='laporan.php'>Laporan</a>

              <hr></hr>

              <marquee width="500" height="40">Project UAS Matkul Basis Data, Doden Pengampu :Muhammad Najamuddin Dwi Miharja, S.Kom, M.kom,</marquee>

             

            </center>

            <right></p>
            <li><a href="login.php"><i class='fa fa-home'></i> LOGOUT</a></li>
            </right>
   

          </div>

        </div>

      </div>

    </div>

    <?php include("include/footer.php"); ?>

  </body>

  <?php include("include/js.php"); ?>
  
</html>
