<?php

include "../koneksi.php";

$id_p	= $_GET["id_p"];

if($delete = mysqli_query($konek, "DELETE FROM tbl_pengumuman WHERE id_p='$id_p'")){
	header("Location: pengumuman.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>