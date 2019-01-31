<?php

include "../koneksi.php";

$id_p	= $_GET["id_p"];

$querypelajaran = mysqli_query($konek, "SELECT * FROM tbl_pengumuman WHERE id_p='$id_p'");
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
<!-- Modal Popup Dosen -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Pengumuman</h4>
					</div>
					<div class="modal-body">
						<form action="pengumuman_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
                        <input name="id_p" type="hidden" value="<?php echo $pelajaran["id_p"]; ?>">
							<div class="form-group">
								<label>Judul</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="judul" type="text" class="form-control" value="<?php echo $pelajaran["judul"]; ?>" />
									</div>
							</div>
							<div class="form-group">
								<label>Isi Pengumuman</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<input name="isi" type="text" class="form-control" value="<?php echo $pelajaran["detail"]; ?>"/>
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