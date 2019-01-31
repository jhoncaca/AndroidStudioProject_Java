<?php

include "../koneksi.php";

$id_jadwal				= $_POST["id_jadwal"];
$nip				= $_POST["nip"];
$nis				= $_POST["nis"];
$kode_kelas		= $_POST["kode_kelas"];
$kode_mapel		= $_POST["kode_mapel"];
$hari				= $_POST["hari"];
$Jam_mulai	= $_POST["jam_mulai"];
$Jam_selesai	= $_POST["jam_selesai"];

if($edit = mysqli_query($konek, "UPDATE tbl_detail_jadwal SET nip='$nip', nis='$nis',
	kode_kelas='$kode_kelas', kode_mapel='$kode_mapel', hari='$hari', jam_mulai='$Jam_mulai', jam_selesai='$Jam_selesai' WHERE id_jadwal='$id_jadwal'")){
		header("Location: jadwal.php");
		exit();
	}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>