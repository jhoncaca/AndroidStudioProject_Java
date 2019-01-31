<?php

include "../koneksi.php";

$Kode_mapel	= $_POST["kode_mapel"];
$Mapel	= $_POST["mapel"];

if($edit = mysqli_query($konek,"UPDATE tbl_mapel SET mapel='$Mapel' WHERE kode_mapel='$Kode_mapel'")){
	header("Location: pelajaran.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>