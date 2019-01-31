<?php

if(isset($_REQUEST['id_wadul'])){

include('con.php');

if(isset($_REQUEST['edit'])){

extract($_REQUEST);

//update the record if the form was submitted

$query=mysqli_query($con,"update tbl_mbonk set image='$image', alamat='$alamat', nama='$nama', no_hp='$no_hp', status='$status' where id_wadul='$id_wadul'") or die(mysql_error());

if($query){

//this will be displayed when the query was successful

echo "<div>Edit.</div>";

}

}

$id_wadul=$_REQUEST['id_wadul'];

//this query will select the user data which is to be used to fill up the form

$query=mysqli_query($con,"select * from tbl_mbonk where id_wadul='$id_wadul'") or die(mysqli_error($conn));

$num=mysqli_num_rows($query);

//just a little validation, if a record was found, the form will be shown

//it means that there's an information to be edited

if($num>0){

$row=mysqli_fetch_assoc($query);

extract($row);

?>

<!--we have our html form here where new user information will be entered-->

<form action='' method='post' border='0'>

<table>

<tr>

<td>Image</td>

<td><input type='text' name='image' value='<?php echo $image;  ?>' /></td>

</tr>

<tr>

<td>Alamat</td>

<td><input type='text' name='alamat' value='<?php echo $alamat;  ?>' /></td>

</tr>

<tr>

<td>Nama Pelapor</td>

<td><input type='text' name='nama'  value='<?php echo $nama;  ?>' /></td>

</tr>

<tr>

<td>No Telp</td>

<td><input type='text' name='no_hp'  value='<?php echo $no_hp;  ?>' /></td>

<tr>
<tr>

<td>Status</td>

<td><input type='text' name='status'  value='<?php echo $status;  ?>' /></td>

<tr>

<td></td>

<td>

<!-- so that we could identify what record is to be updated -->

<input type='hidden' name='id_wadul' value='<?php echo $id_wadul ?>' />

<!-- we will set the action to edit -->

<input type='submit' value='Acc' name="edit" />

</td>

</tr>

</table>

</form>

<?php

}else{

echo "<div>User with this id is not found.</div>";

}

}

else{

echo "<div> You are not authorized to view this page";

}

echo "<a href='admin.php'>Back To List</a>";

?>