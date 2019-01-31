<?php
include "../koneksi.php";

$NIO 			= $_POST["NIO"];
$Nama_ortu 	= $_POST["Nama_ortu"];
$Alamat 		= $_POST["Alamat"];
$No_Telp 		= $_POST["No_Telp"];
$password 		= $_POST["password"];
$nis		= $_POST["nis"];

if ($add = mysqli_query($konek, "INSERT INTO tbl_orangtua (nio, nama_ortu, alamat, no_telp, nis, password) VALUES 
	('$NIO', '$Nama_ortu', '$Alamat', '$No_Telp', '$nis', '$password')")){
		header("Location: wali.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>