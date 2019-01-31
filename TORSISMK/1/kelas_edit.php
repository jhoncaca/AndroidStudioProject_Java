<?php

include "../koneksi.php";

$Kode_kelas		= $_POST["kode_kelas"];
$kelas		= $_POST["kelas"];
$Sub_kelas	= $_POST["sub_kelas"];
$nip	= $_POST["nip"];

if($edit = mysqli_query($konek, "UPDATE tbl_kelas SET kelas='$kelas', sub_kelas='$Sub_kelas', nip='$nip' WHERE kode_kelas='$Kode_kelas'")){
	header("Location: kelas.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>