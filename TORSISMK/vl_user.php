<?php
session_start();
include "koneksi.php";

$Username = $_POST["Username"];
$Password = md5($_POST["Password"]);
$akses = $_POST["hak_akses"];

// Validasi Login
if ($akses!='n'){
	if ($akses=='admin') {
		$_SESSION["akses"] = 'admin';
		$queryuser = mysqli_query ($konek, "SELECT * FROM user WHERE Username='$Username' AND Password='$Password'");
			
		$user = mysqli_fetch_array ($queryuser);
		
		if($user){
					
					$_SESSION["Username"] 			= $user["Username"];
					$_SESSION["Password"] 			= $user["Password"];
					$_SESSION["Id_Usergroup_User"] 	= $user["Id_Usergroup_User"];
					$_SESSION["Id_User"] 			= $user["Id_User"];
					$_SESSION["Foto"]				= $user["Foto"];
					$_SESSION["Login"] 				= true;
					
					if ($_SESSION["Id_Usergroup_User"] == 1){
						header ("Location: 1/index.php");
						exit();
					}
					else if($_SESSION["Id_Usergroup_User"] == 2){
						header ("Location: 2/index.php");
						exit();
					}
					else if($_SESSION["Id_Usergroup_User"] == 3){
						header ("Location: 3/index.php");
						exit();
					}
					else{
						header("Location :pagenotfound.php");
						exit();
					}
				}
				else
				{
					header ("Location: index.php?Err=4");
					exit();
				}
	}
	elseif ($akses=='guru') {
		$_SESSION["akses"] = 'guru';
		$queryuser = mysqli_query ($konek, "SELECT * FROM tbl_guru WHERE nip='$Username' AND password='$Password' AND gr='$akses'");
			
		$user = mysqli_fetch_array ($queryuser);
		
		if($user){
					
					$_SESSION["Username"] 			= $user["nama_guru"];
					$_SESSION["Password"] 			= $user["password"];
					$_SESSION["nip"] 				= $user["nip"];
					$_SESSION["Foto"]				= $user["foto"];
					$_SESSION["Login"] 				= true;
					
					header ("Location: 1/index.php");
					exit();
				}
				else
				{
					header ("Location: index.php?Err=4");
					exit();
				}
	}
	elseif ($akses=='walikelas') {
		$_SESSION["akses"] = 'walikelas';
		$queryuser = mysqli_query ($konek, "SELECT * FROM tbl_guru WHERE nip='$Username' AND password='$Password' AND gr='$akses'");
			
		$user = mysqli_fetch_array ($queryuser);
		
		if($user){
					
					$_SESSION["Username"] 			= $user["nama_guru"];
					$_SESSION["Password"] 			= $user["password"];
					$_SESSION["nip"]	 			= $user["nip"];
					$_SESSION["Foto"]				= $user["foto"];
					$_SESSION["Login"] 				= true;
					
					header ("Location: 1/index.php");
					exit();
				}
				else
				{
					header ("Location: index.php?Err=4");
					exit();
				}
	}
	elseif ($akses=='bk') {
		$_SESSION["akses"] = 'bk';
		$queryuser = mysqli_query ($konek, "SELECT * FROM tbl_guru WHERE nip='$Username' AND password='$Password' AND gr='$akses'");
			
		$user = mysqli_fetch_array ($queryuser);
		
		if($user){
					
					$_SESSION["Username"] 			= $user["nama_guru"];
					$_SESSION["Password"] 			= $user["password"];
					$_SESSION["nip"]	 			= $user["nip"];
					$_SESSION["Foto"]				= $user["foto"];
					$_SESSION["Login"] 				= true;
					
					header ("Location: 1/index.php");
					exit();
				}
				else
				{
					header ("Location: index.php?Err=4");
					exit();
				}
	}

}
	else if (empty ($Username) && empty ($Password)){
		header ("Location: index.php?Err=1");
		exit();
	}
	else if(empty ($Username)){
		header ("Location: index.php?Err=2");
		exit();
	}
	else if(empty ($Password)){
		header ("Location: index.php?Err=3");
		exit();
	}
	else if($akses=='n'){
		header ("Location: index.php?Err=7");
		exit();
	}
	else{
		header ("Location: index.php?Err=5");
		exit();
	}

	
?>