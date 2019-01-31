<?php

include "../koneksi.php";

$Kode_mapel	= $_POST["kode_mapel"];
$Mapel	= $_POST["mapel"];

if($edit = mysqli_query($konek,"UPDATE tbl_kelmapel SET mapel='$Mapel' WHERE kd_mapel='$Kode_mapel'")){
	header("Location: mapel.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>