<?php
include("config.php");

$act=$_GET['act'];

if ($act=='delete'){
	$nim=$_GET['nim'];
	$row = mysqli_query($koneksi, "DELETE FROM yusuf_311910617 WHERE nim = '$nim'");
	header('location:petani.php');
}

elseif ($act=='input'){
	$nim = $_POST["nim"];
 $nama_mhs = $_POST["nama_mhs"];
 $alamat_mhs = $_POST["alamat_mhs"];
 $jurusan_mhs = $_POST["jurusan_mhs"];
 $tgl_lahir = $_POST["tgl_lahir"];
 $IPK = $_POST["IPK"];

	$sql = "INSERT INTO yusuf_311910617 VALUES ('$nim','$nama_mhs','$alamat_mhs','$jurusan_mhs','$tgl_lahir','$IPK')";
	$aksi =mysqli_query($koneksi, $sql);

	if($aksi)
	{
	header('location:petani.php');
	}
	else {echo "gagal";}

}


elseif ($act=='update'){
	$nim = $_POST['nim'];
 $nama_mhs = $_POST['nama_mhs'];
 $alamat_mhs = $_POST['alamat_mhs'];
 $jurusan_mhs = $_POST['jurusan_mhs'];
 $tgl_lahir = $_POST['tgl_lahir'];
 $IPK = $_POST['IPK'];

 $sql = "UPDATE yusuf_311910617 SET nim='$nim', nama_mhs='$nama_mhs' , alamat_mhs='$alamat_mhs' , jurusan_mhs='$jurusan_mhs', tgl_lahir='$tgl_lahir' , IPK='$IPK' WHERE nim='$nim'";

	if(mysqli_query($koneksi, $sql)){
		mysqli_close($koneksi);
		header('location:petani.php');
	}
	else {
		echo '<script type="text/javascript">';
		echo 'alert("gagal");';
		echo '</script>';
	}

}
?>
