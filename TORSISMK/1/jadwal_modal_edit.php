<?php

include "../koneksi.php";

$Id_Jadwal	= $_GET["Id_Jadwal"];

$daftarhari[] = "Senin";
$daftarhari[] = "Selasa";
$daftarhari[] = "Rabu";
$daftarhari[] = "Kamis";
$daftarhari[] = "Jumat";
$daftarhari[] = "Sabtu";
$daftarhari[] = "Minggu";

$queryjadwal = mysqli_query($konek, "SELECT tbl_detail_jadwal.*, tbl_guru.nama_guru,tbl_kelas.kode_kelas,tbl_mapel.mapel,tbl_siswa.nama_siswa FROM tbl_detail_jadwal JOIN tbl_guru ON tbl_guru.nip=tbl_detail_jadwal.nip JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_jadwal.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_jadwal.kode_mapel join tbl_siswa on tbl_siswa.nis=tbl_detail_jadwal.nis WHERE id_jadwal='$Id_Jadwal'");
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
						<h4 class="modal-title">Edit Jadwal</h4>
					</div>
					<div class="modal-body">
						<form action="jadwal_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<input name="id_jadwal" type="hidden" value="<?php echo "$jadwal[id_jadwal]"; ?>">
							<div class="form-group">
								<label>guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="nip" class="form-control">
										<?php
											
											echo "<option value='$jadwal[nip]' selected>$jadwal[nama_guru]</option>";
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
                            <div class="form-group">
								<label>Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-book"></i>
										</div>
										<select name="nis" class="form-control">
											<?php
											echo "<option value='$jadwal[nis]' selected>$jadwal[nama_siswa]</option>";
												$querymtk = mysqli_query ($konek, "SELECT * FROM tbl_siswa");
												if ($querymtk == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while ($mtk = mysqli_fetch_array($querymtk)){
													if($mtk["nis"] != $jadwal["nis"]){
														echo "<option value='$mtk[nis]'>$mtk[nama_siswa]</option>";
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
								<label>Hari</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-calendar"></i>
										</div>
										<select name="hari" class="form-control">
										<?php
											echo "<option value='$jadwal[hari]' selected>$jadwal[hari]</option>";
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