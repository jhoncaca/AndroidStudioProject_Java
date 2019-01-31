<?php 
include'config.php';
   $nio = $_GET['nio'];

$query = "SELECT * from tbl_orangtua where nio='$nio'";
$result = mysqli_query($con,$query);
$arr = array();
while ($row = mysqli_fetch_assoc($result)) {
	$temp = array("id_ortu" => $row["id_ortu"],
	 "nis" => $row["nis"]);


	array_push($arr, $temp);
}

$data = json_encode($arr);
echo $data;
?>