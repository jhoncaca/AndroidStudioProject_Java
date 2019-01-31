<?php

include "../koneksi.php";

$kd_nilai	= $_GET["kd_nilai"];

if($delete = mysqli_query ($konek, "DELETE FROM tbl_detail_nilai WHERE id_nilai='$kd_nilai'")){
	header("Location: nilai.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>