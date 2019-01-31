<?php
include "../koneksi.php";

$NIP 			= $_POST["NIP"];
$Nama_guru 	= $_POST["Nama_guru"];
$Alamat 		= $_POST["Alamat"];
$No_Telp 		= $_POST["No_Telp"];
$password 		= md5($_POST["password"]);

if ($edit = mysqli_query($konek, "UPDATE tbl_guru SET nama_guru='$Nama_guru',
	alamat='$Alamat', no_telp='$No_Telp', password='$password' WHERE nip='$NIP'")){
		header("Location: guru.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>