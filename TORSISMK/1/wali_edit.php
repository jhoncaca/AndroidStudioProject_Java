<?php
include "../koneksi.php";

$NIO 			= $_POST["NIO"];
$Nama_ortu 	= $_POST["Nama_ortu"];
$Alamat 		= $_POST["Alamat"];
$No_Telp 		= $_POST["No_Telp"];
$password 		= $_POST["password"];
$nis		= $_POST["nis"];


if ($edit = mysqli_query($konek, "UPDATE tbl_orangtua SET nama_ortu='$Nama_ortu',
	alamat='$Alamat', no_telp='$No_Telp', nis='$nis', password='$password' WHERE nio='$NIO'")){
		header("Location: wali.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>