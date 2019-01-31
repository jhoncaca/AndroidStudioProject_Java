<?php

include "../koneksi.php";

$id_ujian				= $_POST["id_ujian"];
$kode_kelas		= $_POST["kode_kelas"];
$kode_mapel		= $_POST["kode_mapel"];
$tgl_ujian				= $_POST["tgl_ujian"];
$Jam_mulai	= $_POST["jam_mulai"];
$Jam_selesai	= $_POST["jam_selesai"];
$keterangan				= $_POST["ket"];

if($edit = mysqli_query($konek, "UPDATE tbl_detail_ujian SET kode_kelas='$kode_kelas', kode_mapel='$kode_mapel', tgl_ujian='$tgl_ujian', jam_mulai='$Jam_mulai', jam_selesai='$Jam_selesai', ket='$keterangan' WHERE id_ujian='$id_ujian'")){
		header("Location: ujian.php");
		exit();
	}
die("Terdapat Kesalahan : ". mysqli_error($konek));

?>