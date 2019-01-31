<?php
include "../koneksi.php";
session_start();

date_default_timezone_set("Asia/Jakarta");
$n  			= $_POST["nis"];
$s 				= $_POST["status"];
$tgl_skrang		= date("Y-m-d");
$tgl 			= date("Y-m-d H:i:s");
$aksi 			= false;
$i=0;

foreach ($n as $d) {
	$nis = $n[$i];
	$status = $s[$i];
	$NIP 			= $_SESSION['nip'];

	$sqlmapel = mysqli_query($konek,"SELECT * FROM tbl_guru WHERE nip='$NIP'");
	$data = mysqli_fetch_array($sqlmapel);
	$mapel = $data['matpel'];

	$sqlcek = mysqli_query($konek,"SELECT * FROM tbl_absensi WHERE nip='$NIP' AND nis='$nis' AND kd_mapel='$mapel' AND DATE( FROM_UNIXTIME( unix_timestamp(tgl_absensi) ) )='$tgl_skrang'");
	$jml=mysqli_num_rows($sqlcek);
	if ($jml >= 1) {
		continue;
		$aksi = false;
	}else{
		$add = mysqli_query($konek, "INSERT INTO tbl_absensi (nip, nis, kd_mapel, status, tgl_absensi) VALUES 
	('$NIP', '$nis', '$mapel', '$status', '$tgl')");
		$aksi = true;
	}
	$i++;
}


if ($aksi==true){
		header("Location: absensi.php");
		exit();
	}
else{
	?>
	<script type="text/javascript">
		alert('Data invalid');
		setTimeout("location.href='absensi.php'", 1000);
	</script>
	<?php
	exit();
}

?>




