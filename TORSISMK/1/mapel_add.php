<?php

include "../koneksi.php";

$Kode_mapel	= $_POST["kode_mapel"];
$mapel	= $_POST["mapel"];


if($add = mysqli_query($konek,"INSERT INTO tbl_kelmapel (kd_mapel, mapel) VALUES ('$Kode_mapel', '$mapel')")){
	header("Location: mapel.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>