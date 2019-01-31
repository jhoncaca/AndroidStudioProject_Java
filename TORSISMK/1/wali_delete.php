<?php

include "../koneksi.php";

$NIO	= $_GET["nio"];

if($delete = mysqli_query ($konek, "DELETE FROM tbl_orangtua WHERE nio='$NIO'")){
	header("Location: wali.php");
	exit();
}
die ("Terdapat Kesalahan : ".mysqli_error($konek));

?>