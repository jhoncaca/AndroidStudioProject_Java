<?php

include "../koneksi.php";

$Kode_kelas 		= $_POST["kode_kelas"];
$Nama_kelas		= $_POST["kelas"];
$Sub_Kelas	= $_POST["sub_kelas"];
$nip	= $_POST["nip"];

if($add = mysqli_query($konek, "INSERT INTO tbl_kelas (kode_kelas, kelas, sub_kelas, nip) VALUES ('$Kode_kelas', '$Nama_kelas', '$Sub_Kelas','$nip')")){
	header("Location: kelas.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>