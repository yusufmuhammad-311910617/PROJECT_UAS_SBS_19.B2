<?php
include("config.php");
include("fungsi/fungsi_indotgl.php");
include("fungsi/fungsi_rupiah.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Laporan</title>
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
					<div class='panel panel-success'>					
						<div class='panel-heading'>Transaksi</div>
						<a class='btn btn-success' href='export_xls.php' target="_blank">
						<i class='fa fa-print'></i> expor xls</a>
						
						<a class='btn btn-success' href='print.php' target="_blank">
						<i class='fa fa-print'></i> print</a>
						
						<div class='panel-body'>
							<center>
								<h3></h3>
								<h3>Data Mahasiswa Universitas Pelita Bangsa</h3>
								<p>&nbsp;</p>
							</center>

							<div class='panel panel-primary'>
						
						
							<table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th>nim</th>
								  <th>nama_mhs</th>
								  <th>alamat_mhs</th>
								  <th>jurusan_mhs</th>
								  <th>tgl_lahir</th>
								  <th>IPK</th>
								 
								  
								</tr>
							  </thead>
							  <tbody>
								<?php
									$sqlquery = "SELECT * FROM yusuf_311910617";
									if ($result = mysqli_query($koneksi, $sqlquery)) {
										while ($row = mysqli_fetch_assoc($result)) {
								?>
								<tr>
								<td><?php echo $row["nim"];?></td>
								<td><?php echo $row["nama_mhs"];?></td>
								<td><?php echo $row["alamat_mhs"];?></td>
								<td><?php echo $row["jurusan_mhs"];?></td>
								<td><?php echo $row["tgl_lahir"];?></td>
								<td><?php echo $row["IPK"];?></td>
								
							
								</td>
								</tr>
								<?php
										}
										mysqli_free_result($result);
									}
									mysqli_close($koneksi);
									?>
							  </tbody>
							  </table>
							  
							
							<div class='pull-right'>
							PUNDENREJO, <?php echo tgl_indo($hari_ini); ?><br>
							<b><center>Presiden Kampus</center></b>
							<p>&nbsp;</p>
							<p>&nbsp;</p>
							<b><center>Yusuf Muhammad</center></b>
							</div>
							<td><a href="add_petani.php"></a></td>
						</div>
					</div>

				</div>
			</div>
		</div>

</html>
