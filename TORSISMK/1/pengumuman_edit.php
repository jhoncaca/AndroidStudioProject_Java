<?php

include "../koneksi.php";

$id_p		=$_POST["id_p"];
$judul	= $_POST["judul"];
$isi	= $_POST["isi"];
$tgl	=date("d-m-Y");

if($edit = mysqli_query($konek,"UPDATE tbl_pengumuman SET judul='$judul', detail='$isi', tgl='$tgl' WHERE id_p='$id_p'")){
	header("Location: pengumuman.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>