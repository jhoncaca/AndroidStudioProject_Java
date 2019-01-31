<?php

include "../koneksi.php";

$Kode_mapel	= $_GET["Kode_mapel"];

$querypelajaran = mysqli_query($konek, "SELECT * FROM tbl_kelmapel WHERE kd_mapel='$Kode_mapel'");
if($querypelajaran == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($pelajaran = mysqli_fetch_array($querypelajaran)){

?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
   <script>
		$(function (){
			$('#Jam_Mulai2').datetimepicker({
				format: 'HH:mm'
			});
			
			$('#Jam_Selesai2').datetimepicker({
				format: 'HH:mm'
			});
		});
	</script>
<!-- Modal Popup Pelajaran -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit pelajaran</h4>
					</div>
					<div class="modal-body">
						<form action="mapel_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Mapel</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="kode_mapel" type="text" class="form-control" value="<?php echo $pelajaran["kd_mapel"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Pelajaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="mapel" type="text" class="form-control" value="<?php echo $pelajaran["mapel"]; ?>"/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Simpan
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
			
			
<?php
			}

?>