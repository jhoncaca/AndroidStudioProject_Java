<?php

include "../koneksi.php";

$id				= $_POST["id_absensi"];
$status			= $_POST["status"];

if($edit = mysqli_query($konek, "UPDATE tbl_absensi SET status='$status' WHERE id_absensi='$id'")){
	header("Location: absensi.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>