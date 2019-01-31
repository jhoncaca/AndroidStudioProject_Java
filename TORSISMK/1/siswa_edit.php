<?php

include "../koneksi.php";

$NIS 				= $_POST["nis"];
$Nama_siswa		= $_POST["nama_siswa"];
$Kode_kelas		= $_POST["kode_kelas"];
$No_Telp 			= $_POST["no_telp"];
$Alamat 			= $_POST["alamat"];
$Tanggal_Lahir 		= $_POST["tgl_lahir"];
$password		= md5($_POST["password"]);

if($edit = mysqli_query($konek, "UPDATE tbl_siswa SET nama_siswa='$Nama_siswa', kode_kelas='$Kode_kelas', no_telp='$No_Telp', alamat='$Alamat', tgl_lahir='$Tanggal_Lahir', password='$password' WHERE nis='$NIS'")){
		header("Location: siswa.php");
		exit();
	}
die("Terdapat Kesalahan : ".mysqli_error($konek));

?>