<?php

include "../koneksi.php";

$Id_Ujian	= $_GET["id_ujian"];

if($delete = mysqli_query($konek, "DELETE FROM tbl_detail_ujian WHERE id_ujian='$Id_Ujian'")){
	header("Location: ujian.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>