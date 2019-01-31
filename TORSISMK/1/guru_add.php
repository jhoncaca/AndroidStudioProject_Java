<?php
include "../koneksi.php";

$NIP 			= $_POST["NIP"];
$Nama_guru 	= $_POST["Nama_guru"];
$Alamat 		= $_POST["Alamat"];
$No_Telp 		= $_POST["No_Telp"];
$password 		= md5($_POST["password"]);
$mapel			= $_POST["kode_mapel"];
$jabatan		= $_POST["jabatan"];

if ($add = mysqli_query($konek, "INSERT INTO tbl_guru (nip, nama_guru, alamat, no_telp, matpel, gr, password) VALUES 
	('$NIP', '$Nama_guru', '$Alamat', '$No_Telp', '$mapel', '$jabatan', '$password')")){
		header("Location: guru.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>