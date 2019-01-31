<?php

include "../koneksi.php";

$NIS	= $_GET["NIS"];

$querymhs = mysqli_query($konek, "SELECT tbl_siswa.*, tbl_kelas.nip FROM tbl_siswa JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_siswa.kode_kelas WHERE nis='$NIS'");
if($querymhs == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($mhs = mysqli_fetch_array($querymhs)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit siswa</h4>
					</div>
					<div class="modal-body">
						<form action="siswa_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
								<input name="nis" type="text" class="form-control"  value="<?php echo $mhs["nis"]; ?>"readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nama_siswa" type="text" class="form-control" value="<?php echo $mhs["nama_siswa"]; ?>"/>
									</div>
							</div>
                            <div class="form-group">
								<label>kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<select name="kode_kelas" class="form-control">
											<?php
												echo "<option value='$mhs[kode_kelas]' selected>$mhs[kode_kelas]</option>";
												$querykelas = mysqli_query($konek, "SELECT * FROM tbl_kelas");
												if($querykelas == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($kelas = mysqli_fetch_array($querykelas)){
													if($kelas["kode_kelas"] != $mhs["kode_kelas"]){
														echo "<option value='$kelas[kode_kelas]'>$kelas[kode_kelas]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
                            <div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="no_telp" type="text" class="form-control" value="<?php echo $mhs["no_telp"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="alamat" type="text" class="form-control" value="<?php echo $mhs["alamat"]; ?>"/>
									</div>
							</div>
                            <div class="form-group">
								<label>Tanggal Lahir</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="tgl_lahir" type="text" class="form-control" value="<?php echo $mhs["tgl_lahir"]; ?>">
									</div>
							</div>
                            <div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input id="password" name="password" type="text" class="form-control" value="<?php echo $mhs["password"]; ?>">
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Save
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>