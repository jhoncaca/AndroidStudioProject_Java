<?php

include "../koneksi.php";

$Kode_kelas	= $_GET["kode_kelas"];

if($delete = mysqli_query($konek, "DELETE FROM tbl_kelas WHERE kode_kelas='$Kode_kelas'")){
	header("Location: kelas.php");
	exit();
}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>