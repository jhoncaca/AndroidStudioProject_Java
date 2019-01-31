<?php

include "../koneksi.php";

$NIP	= $_GET["nip"];

if($delete = mysqli_query ($konek, "DELETE FROM tbl_guru WHERE nip='$NIP'")){
	header("Location: guru.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>