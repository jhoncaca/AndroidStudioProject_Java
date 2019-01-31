<?php

include "../koneksi.php";

$Kode_mapel	= $_POST["kode_mapel"];
$kd	= $_POST["mapel"];
$kd_mapel = $_POST["kode_kelmapel"];

$sql = mysqli_query($konek, "SELECT * FROM tbl_kelmapel WHERE kd_mapel='$kd_mapel'");
$cek = mysqli_fetch_array($sql);
$nama_mapel = $cek['mapel'];

$k = $nama_mapel." - ".$kd;


if($add = mysqli_query($konek,"INSERT INTO tbl_mapel (kode_mapel, mapel, kd_mapel) VALUES ('$Kode_mapel', '$k', '$kd_mapel')")){
	header("Location: pelajaran.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>