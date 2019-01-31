<?php

include "../koneksi.php";

$Kode_mapel	= $_GET["kode_mapel"];

if($delete = mysqli_query($konek, "DELETE FROM tbl_mapel WHERE id_mapel='$Kode_mapel'")){
	header("Location: pelajaran.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>