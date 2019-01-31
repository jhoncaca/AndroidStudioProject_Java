<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include 'config.php';
	createNilai();
}
	
function createNilai() {
	global $con;
	$nip = $_POST["nip"];
	$nis = $_POST["nis"];
	$kode_mapel = $_POST["kode_mapel"];
	$nilai_uh = $_POST["nilai_uh"];
	$nilai_tugas = $_POST["nilai_tugas"];
	$nilai_uts = $_POST["nilai_uts"];
	$nilai_uas = $_POST["nilai_uas"];
	$nilai_akhir = $_POST["nilai_akhir"];
	$nilai_pengetahuan = $_POST["nilai_pengetahuan"];
	$nilai_keterampilan = $_POST["nilai_keterampilan"];
	$kkm = $_POST["kkm"];
			
	$na = ($nilai_uh + $nilai_tugas + $nilai_pengetahuan + $nilai_keterampilan + $nilai_uts + $nilai_uas)/6;
	
	if($na >= $kkm){
		$kompetensi = 'tercapai';
	}else{
		$kompetensi = 'tidak tercapai';
	}
	

	$query = "Insert into tbl_detail_nilai (nip,nis,kode_mapel,nilai_uh,nilai_tugas,nilai_uts,nilai_uas,nilai_akhir,nilai_pengetahuan,nilai_keterampilan,kkm,kompetensi) values ('$nip','$nis','$kode_mapel','$nilai_uh','$nilai_tugas','$nilai_uts','$nilai_uas','$nilai_akhir', 
	'$nilai_pengetahuan','$nilai_keterampilan','$kkm','$kompetensi' );";

	mysqli_query($con, $query) or die(mysqli_error($con));
	mysqli_close($con);

}
?>