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
	
		
		
							<center>
								<h3></h3>
								<h3>Data Mahasiswa Universitas Pelita Bangsa</h3>
								<p>&nbsp;</p>
							</center>

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
						
		<script>
		window.print();
	</script>
	
</html>
