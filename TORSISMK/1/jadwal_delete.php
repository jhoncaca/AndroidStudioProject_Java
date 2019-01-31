<?php

include "../koneksi.php";

$Id_Jadwal	= $_GET["id_jadwal"];

if($delete = mysqli_query($konek, "DELETE FROM tbl_detail_jadwal WHERE id_jadwal='$Id_Jadwal'")){
	header("Location: jadwal.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>