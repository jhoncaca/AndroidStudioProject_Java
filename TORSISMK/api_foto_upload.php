<?php

	if($_SERVER['REQUEST_METHOD']=='POST'){
		
		$image = $_POST['image'];
                $alamat = $_POST['alamat'];
		$nama = $_POST['nama'];
   $no_hp = $_POST['no_hp'];
   $status = $_POST['status'];
		require_once('con.php');
		
		$sql ="SELECT id_mbonk FROM tbl_mbonk ORDER BY id_mbonk ASC";
		
		$res = mysqli_query($con,$sql);
		
		$id_mbonk = 0;
		
		while($row = mysqli_fetch_array($res)){
				$id_mbonk = $row['id_mbonk'];
		}
		
		$path = "uploads/$id_mbonk.png";
		
		$actualpath = "http://project0.pe.hu/$path";
		
		$sql = "INSERT INTO tbl_mbonk (image,alamat,nama,no_hp,status) VALUES ('$actualpath','$alamat','$nama','$no_hp','$status')";
		
		if(mysqli_query($con,$sql)){
			file_put_contents($path,base64_decode($image));
			echo "Successfully Uploaded";
		}
		
		mysqli_close($con);
	}else{
		echo "Error";
	}