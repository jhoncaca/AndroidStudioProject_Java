<?php

include "../koneksi.php";

$NIS = $_GET["nis"];

if($delete = mysqli_query($konek, "DELETE FROM tbl_siswa WHERE nis='$NIS'")){
	header("Location: siswa.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>