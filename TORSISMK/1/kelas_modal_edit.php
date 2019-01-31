<?php

include "../koneksi.php";

$Kode_kelas	= $_GET["Kode_kelas"];

$querykelas = mysqli_query($konek, "SELECT tbl_kelas.*, tbl_guru.nama_guru FROM tbl_kelas JOIN tbl_guru ON tbl_guru.nip=tbl_kelas.nip WHERE kode_kelas='$Kode_kelas'");
if($querykelas == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($kelas = mysqli_fetch_array($querykelas)){

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
						<h4 class="modal-title">Edit kelas</h4>
					</div>
					<div class="modal-body">
						<form action="kelas_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="kode_kelas" type="text" class="form-control" value="<?php echo $kelas["kode_kelas"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<input name="kelas" type="text" class="form-control" value="<?php echo $kelas["kelas"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Sub Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-graduation-cap"></i>
										</div>
										<input name="sub_kelas" type="text" class="form-control" value="<?php echo $kelas["sub_kelas"]; ?>"/>									</div>
							</div>
                            <div class="form-group">
								<label>guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="nip" class="form-control">
										<?php
											
											echo "<option value='$kelas[nip]' selected>$kelas[nama_guru]</option>";
											$queryguru = mysqli_query($konek, "SELECT * FROM tbl_guru");
											if($queryguru == false){
												die("Terdapat Kesalahan : ". mysqli_error($konek));
											}
											while($guru = mysqli_fetch_array($queryguru)){
												if($guru["nip"] != $jadwal["nip"])
												{
													echo "<option value='$guru[nip]'>$guru[nama_guru]</option>";
												}
											}
										?>
										</select>
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