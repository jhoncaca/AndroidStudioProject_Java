<?php

include "../koneksi.php";

$kd	= $_GET["kd_nilai"];

$querynilai = mysqli_query($konek, "SELECT * FROM tbl_detail_nilai WHERE id_nilai='$kd'");
if($querynilai == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($nilai = mysqli_fetch_array($querynilai)){
	$kd_guru=$nilai['nip'];
	$queryguru = mysqli_query ($konek, "SELECT * FROM tbl_guru WHERE nip='$kd_guru'");
	$guru = mysqli_fetch_array ($queryguru);

	$kd_siswa=$nilai['nis'];
	$querysiswa = mysqli_query ($konek, "SELECT * FROM tbl_siswa WHERE nis='$kd_siswa'");
	$siswa = mysqli_fetch_array ($querysiswa);

	$kd_mapel=$nilai['kode_mapel'];
	$querymapel = mysqli_query ($konek, "SELECT * FROM tbl_mapel WHERE kode_mapel='$kd_mapel'");
	$mapel = mysqli_fetch_array ($querymapel);
?>
	
	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->

<!-- Modal Popup nilai -->
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Edit Nilai</h4>
					</div>
					<div class="modal-body">
						<form action="nilai_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Nilai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="kd_nilai" type="text" class="form-control" value="<?php echo $nilai["id_nilai"]; ?>" readonly />
									</div>
							</div>
							<div class="form-group">
								<label>Nama Guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<input name="nip" type="text" class="form-control" value="<?php echo $guru["nama_guru"]; ?>" readonly/>
									</div>
							</div>
                            <div class="form-group">
								<label>Nama Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="nis" type="text" class="form-control" value="<?php echo $siswa["nama_siswa"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Mata Pelajaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<input name="kd_mapel" type="text" class="form-control" value="<?php echo $mapel["mapel"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>KKM</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="kkm" type="text" class="form-control" value="<?php echo $nilai["kkm"]; ?>" readonly/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai Ulangan Harian</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="n_uh" type="text" class="form-control" value="<?php echo $nilai["nilai_uh"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai Tugas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="n_tgs" type="text" class="form-control" value="<?php echo $nilai["nilai_tugas"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai UTS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
                                        <input name="nilai_uts" type="text" class="form-control" placeholder="Nilai UTS" value="<?php echo $nilai["nilai_uts"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai UAS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
                                        <input name="nilai_uas" type="text" class="form-control" placeholder="Nilai UAS" value="<?php echo $nilai["nilai_uas"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai Pengetahuan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="n_p" type="text" class="form-control" value="<?php echo $nilai["nilai_pengetahuan"]; ?>"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai Keterampilan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="n_k" type="text" class="form-control" value="<?php echo $nilai["nilai_keterampilan"]; ?>"/>
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