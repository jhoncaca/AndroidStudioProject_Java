<?php

include "../koneksi.php";

$Kode_mapel	= $_GET["kode_mapel"];

if($delete = mysqli_query($konek, "DELETE FROM tbl_kelmapel WHERE kd_mapel='$Kode_mapel'")){
	header("Location: mapel.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>