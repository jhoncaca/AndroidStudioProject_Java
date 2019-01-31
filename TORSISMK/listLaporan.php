<?php 
include'con.php';
   

$query = "SELECT * from tbl_mbonk ORDER BY id_wadul DESC ";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("id_wadul" => $row["id_wadul"],
	 "image" => $row["image"], "alamat" => $row["alamat"],"nama" => $row["nama"],"no_hp" => $row["no_hp"],"status" => $row["status"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>