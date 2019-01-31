<?php

include "../koneksi.php";

$nip				= $_POST["nip"];
$kode_kelas		= $_POST["kode_kelas"];
$kode_mapel		= $_POST["kode_mapel"];
$hari				= $_POST["hari"];
$Jam_mulai	= $_POST["jam_mulai"];
$Jam_selesai	= $_POST["jam_selesai"];

$querysiswa = mysqli_query($konek,"SELECT * FROM tbl_siswa WHERE kode_kelas = '$kode_kelas'");

while ($data = mysqli_fetch_array($querysiswa)) {
	$nis = $data['nis'];
	$add = mysqli_query($konek, "INSERT INTO tbl_detail_jadwal(nip, nis, kode_kelas, kode_mapel, hari, jam_mulai, jam_selesai,img_jadwal) VALUES ('$nip', '$nis', '$kode_kelas', '$kode_mapel', '$hari','$Jam_mulai', '$Jam_selesai','ic_jadwal.png')");
}


if($add){
	header("Location: jadwal.php");
	exit();
}
die ("Terdapat Kesalahan : ". mysqli_error($konek));

?>