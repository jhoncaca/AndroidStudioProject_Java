<?php
	
$konek = mysqli_connect("localhost", "torsisskr", "skr1cimahi478", "torsismk");
	
if(mysqli_connect_errno()){
	printf ("Gagal terkoneksi : ".mysqli_connect_error());
	exit();
}
	
?>