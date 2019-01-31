<?php

include "../koneksi.php";

$NIO	= $_GET["nio"];

$queryguru = mysqli_query($konek, "SELECT * FROM tbl_orangtua WHERE nio='$NIO'");
if($queryguru == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($guru = mysqli_fetch_array($queryguru)){

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
<!-- Modal Popup guru -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Wali Murid</h4>
					</div>
					<div class="modal-body">
						<form action="wali_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>NIO</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="NIO" type="text" class="form-control" value="<?php echo $guru["nio"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
							  <label>Nama Wali Murid</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="Nama_ortu" type="text" class="form-control" value="<?php echo $guru["nama_ortu"]; ?>"/>
									</div>
							</div>
                            <div class="form-group">
								<label>Alamat</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="Alamat" type="text" class="form-control" value="<?php echo $guru["alamat"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>No. Telp</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="No_Telp" type="text" class="form-control" value="<?php echo $guru["no_telp"]; ?>"/>
									</div>
							</div>
                             <div class="form-group">
								<label> Nama Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="nis" class="form-control">
											<?php
												
												$querymtk1 = mysqli_query ($konek, "SELECT * FROM tbl_siswa");
												if ($querymtk1 == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($mtk1 = mysqli_fetch_array($querymtk1)){
													echo "<option value='$mtk1[nis]'>$mtk1[nama_siswa]</option>";
												}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Password</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="password" type="text" class="form-control" value="<?php echo $guru["password"]; ?>"/>
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