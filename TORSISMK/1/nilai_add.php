<?php
include "../koneksi.php";

$kd_nilai 	= $_POST["kd_nilai"];
$nip		= $_POST["nip"];
$nis		= $_POST["nis"];
$kd_mapel	= $_POST["kode_mapel"];
$kkm 		= $_POST["kkm"];
$n_uh 		= $_POST["nilai_uh"];
$n_tgs		= $_POST["nilai_tgs"];
$n_uts		= $_POST["nilai_uts"];
$n_uas		= $_POST["nilai_uas"];
$n_p		= $_POST["nilai_p"];
$n_k		= $_POST["nilai_k"];

$na = ($n_uh + $n_tgs + $n_p + $n_k + $n_uts + $n_uas)/6;

if($na >= $kkm){
	$kompetensi = 'tercapai';
}else{
	$kompetensi = 'tidak tercapai';
}


if ($add = mysqli_query($konek, "INSERT INTO tbl_detail_nilai (id_nilai, nip, nis, kode_mapel, kkm, nilai_uh, nilai_tugas, nilai_uts, nilai_uas, nilai_pengetahuan, nilai_keterampilan, nilai_akhir, kompetensi) VALUES 
	('$kd_nilai', '$nip', '$nis','$kd_mapel', '$kkm', '$n_uh', '$n_tgs', '$n_uts', '$n_uas', '$n_p', '$n_k', '$na', '$kompetensi')")){
		header("Location: nilai.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>