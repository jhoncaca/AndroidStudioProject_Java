<?php

include "../koneksi.php";

$kode_kelas		= $_POST["kode_kelas"];
$kode_mapel		= $_POST["kode_mapel"];
$tgl_ujian				= $_POST["tgl_ujian"];
$Jam_mulai	= $_POST["jam_mulai"];
$Jam_selesai	= $_POST["jam_selesai"];
$keterangan				= $_POST["ket"];

if($add = mysqli_query($konek, "INSERT INTO tbl_detail_ujian(kode_kelas, kode_mapel, tgl_ujian, jam_mulai, jam_selesai,ket,img_ujian) VALUES ('$kode_kelas', '$kode_mapel', '$tgl_ujian','$Jam_mulai', '$Jam_selesai','$keterangan', 'ic_ujian.png')")){
	header("Location: ujian.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>