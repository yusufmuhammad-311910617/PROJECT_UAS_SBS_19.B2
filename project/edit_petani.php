<?php
include("config.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Edit Data Petani</title>
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


					<?php
						$nim = $_GET['nim'];
						$sqlquery = "SELECT * FROM yusuf_311910617 WHERE nim='$nim'";
						$result = mysqli_query($koneksi, $sqlquery) or die (mysqli_connect_error());
						$row = mysqli_fetch_assoc($result);
						?>
					<div class='panel panel-success'>
						<div class='panel-heading'>Edit Data Petani</div>
						<div class='panel-body'>
							<form method='post' action='aksi_petani.php?act=update'>
								<div class='form-group'>
									<input type="hidden" name="nim" id="nim" value="<?php echo $row["nim"]; ?>">
									<label>Nim Mahasiswa</label>
									<input type='text' class='form-control' name='nim' value="<?php echo $row["nim"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Nama Mahasiswa</label>
									<input type='text' class='form-control' name='nama_mhs' value="<?php echo $row["nama_mhs"]; ?>" required/>
								</div>
						        <div class='form-group'>
									<label>Alamat Mahasiswa</label>
									<input type='text' class='form-control' name='alamat_mhs' value="<?php echo $row["alamat_mhs"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Jurusan Mahasiswa</label>
									<input type='text' class='form-control' name='jurusan_mhs' value="<?php echo $row["jurusan_mhs"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>Tanggal Lahir</label>
									<input type='date' class='form-control' name='tgl_lahir' value="<?php echo $row["tgl_lahir"]; ?>" required/>
								</div>
								<div class='form-group'>
									<label>IPK</label>
									<input type='text' class='form-control' name='IPK' value="<?php echo $row["IPK"]; ?>" required/>
								</div>
						           
								
								<button type='input' name='update' class='btn btn-success'>Edit</button>
								<a href="petani.php"></a></td>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
		<?php include("include/footer.php"); ?>
	</body>
	<?php include("include/js.php"); ?>
</html>
