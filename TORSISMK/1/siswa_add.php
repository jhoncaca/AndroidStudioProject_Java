<?php
include "../koneksi.php";

$NIS 				= $_POST["nis"];
$Nama_siswa		= $_POST["nama_siswa"];
$Kode_kelas		= $_POST["kode_kelas"];
$No_Telp 			= $_POST["no_telp"];
$Alamat 			= $_POST["alamat"];
$Tanggal_Lahir 		= $_POST["tgl_lahir"];
$password		= md5($_POST["password"]);


if ($add = mysqli_query($konek, "INSERT INTO tbl_siswa (nis, nama_siswa, kode_kelas, no_telp, alamat, tgl_lahir, password,img_siswa) VALUES 
	('$NIS', '$Nama_siswa', '$Kode_kelas','$No_Telp', '$Alamat', '$Tanggal_Lahir', '$password', 'windi.png')")){
		header("Location: siswa.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>