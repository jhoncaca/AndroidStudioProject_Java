<?php

include "../koneksi.php";

$id	= $_GET["id"];

if($delete = mysqli_query($konek, "DELETE FROM tbl_absensi WHERE id_absensi='$id'")){
	header("Location: absensi.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>