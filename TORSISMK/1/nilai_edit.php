<?php
include "../koneksi.php";

$kd_nilai	= $_POST["kd_nilai"];
$kkm		= $_POST["kkm"];
$n_uh 		= $_POST["n_uh"];
$n_tgs 		= $_POST["n_tgs"];
$n_p 		= $_POST["n_p"];
$n_k 		= $_POST["n_k"];
$n_uts		= $_POST["nilai_uts"];
$n_uas		= $_POST["nilai_uas"];

$na = ($n_uh + $n_tgs + $n_p + $n_k + $n_uts + $n_uas)/6;

if($na >= $kkm){
	$kompetensi = 'tercapai';
}else{
	$kompetensi = 'tidak tercapai';
}

if ($edit = mysqli_query($konek, "UPDATE tbl_detail_nilai SET nilai_uh='$n_uh',
	nilai_tugas='$n_tgs', nilai_pengetahuan='$n_p', nilai_keterampilan='$n_k', nilai_akhir='$na', nilai_uts='$n_uts', nilai_uas='$n_uas', kompetensi='$kompetensi' WHERE id_nilai='$kd_nilai'")){
		header("Location: nilai.php");
		exit();
	}
die ("Terdapat kesalahan : ". mysqli_error($konek));

?>