<?php

include "../koneksi.php";

$Id_ujian	= $_GET["Id_Ujian"];

$daftarhari[] = "Ujian Tengah Semester";
$daftarhari[] = "Ujian Akhir Semester";

$queryjadwal = mysqli_query($konek, "SELECT tbl_detail_ujian.*, tbl_mapel.mapel FROM tbl_detail_ujian JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_ujian.kode_mapel WHERE id_ujian='$Id_ujian'");
if($queryjadwal == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($jadwal = mysqli_fetch_array($queryjadwal)){

?>
	<link rel="stylesheet" href="../aset/plugins/bootstrap-datetimepicker/css/bootstrap-datetimepicker.min.css">
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<script src="../aset/plugins/bootstrap-datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
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
	<!-- Date Time Picker -->
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
<!-- Modal Popup guru -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Jadwal Ujian</h4>
					</div>
					<div class="modal-body">
						<form action="ujian_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_ujian" type="hidden" value="<?php echo "$jadwal[id_ujian]"; ?>">
							<div class="form-group">
								<label>kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-university"></i>
										</div>
										<select name="kode_kelas" class="form-control">
											<?php
												
												echo "<option value='$jadwal[kode_kelas]' selected>$jadwal[kode_kelas]</option>";
												$querykelas = mysqli_query($konek, "SELECT * FROM tbl_kelas");
												if($querykelas == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($kelas = mysqli_fetch_array($querykelas)){
													if($kelas["kode_kelas"] != $jadwal["kode_kelas"]){
														echo "<option value='$kelas[kode_kelas]'>$kelas[kode_kelas]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
                            <div class="form-group">
								<label>Pelajaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<select name="kode_mapel" class="form-control">
											<?php
												
												echo "<option value='$jadwal[kode_mapel]' selected>$jadwal[mapel]</option>";
												$querymtk = mysqli_query ($konek, "SELECT * FROM tbl_mapel");
												if ($querymtk == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($mtk = mysqli_fetch_array($querymtk)){
													if($mtk["kode_mapel"] != $jadwal["kode_mapel"]){
														echo "<option value='$mtk[kode_mapel]'>$mtk[mapel]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
                             <div class="form-group">
								<label>Tanggal Ujian</label>
									<div class="input-group date">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<input id="Tanggal_Lahir2" name="tgl_ujian" type="text" class="form-control" placeholder="Tanggal Ujian" value="<?php echo $jadwal["tgl_ujian"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jam Mulai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input id="Jam_Mulai2" name="jam_mulai" type="text" class="form-control" value="<?php echo $jadwal["jam_mulai"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Jam Selesai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-clock-o"></i>
										</div>
										<input id="Jam_Selesai2" name="jam_selesai" type="text" class="form-control" value="<?php echo $jadwal["jam_selesai"]; ?>">
									</div>
							</div>
							<div class="form-group">
								<label>Keterangan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<select name="ket" class="form-control">
										<?php
											echo "<option value='$jadwal[ket]' selected>$jadwal[ket]</option>";
											for($hari=0; $hari<count($daftarhari); $hari++){
												if($jadwal["Hari"] != $daftarhari[$hari])
												{
													echo "<option value='$daftarhari[$hari]'>$daftarhari[$hari]</option>";
												}
												
											}
										?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Tambah
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