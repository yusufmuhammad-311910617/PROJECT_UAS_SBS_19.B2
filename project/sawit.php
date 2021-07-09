<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Data Mahasiswa</title>
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


					<div class='panel panel-primary'>
						<div class='panel-heading'>FUNGSI TRIGGER / DATA TRIGGER</div>
						<div class='panel-body'>
							
							<p>
							<table class="table table-hover table-bordered">
							  <thead>
								<tr>
								  <th>id_log</th>
								  <th>nim</th>
								  <th>nama_mhs</th>
								  <th>jurusan_mhs_lama</th>
								  <th>jurusan_mhs_baru</th>
								  <th>waktu</th>
								 
								</tr>
							  </thead>
							  <tbody>
								<?php
									$sqlquery = "SELECT * FROM log_yusuf_311910617";
									if ($result = mysqli_query($koneksi, $sqlquery)) {
										while ($row = mysqli_fetch_assoc($result)) {
								?>
								<tr>
								<td><?php echo $row["id_log"];?></td>
								<td><?php echo $row["nim"];?></td>
								<td><?php echo $row["nama_mhs"];?></td>
								<td><?php echo $row["jurusan_mhs_lama"];?></td>
								<td><?php echo $row["jurusan_mhs_baru"];?></td>
								<td><?php echo $row["waktu"];?></td>
								
								
								<div class="btn-group">
								   
								</div>
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
						</div>
					</div>

				</div>
			</div>
		</div>
		<?php include("include/footer.php"); ?>
	</body>
	<?php include("include/js.php"); ?>
</html>
