<?php

include "../koneksi.php";

$kd	= $_GET["kd_absensi"];

$queryabsensi = mysqli_query($konek, "SELECT * FROM tbl_absensi WHERE id_absensi='$kd'");
if($queryabsensi == false){
	die ("Terjadi Kesalahan : ". mysqli_error($konek));
}
while($absen = mysqli_fetch_array($queryabsensi)){

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
						<h4 class="modal-title">Absensi Siswa</h4>
					</div>
					<div class="modal-body">
						<form action="absensi_edit.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<table id="data" class="table table-bordered table-striped table-scalable">
								<thead>
									<tr>
										<th>NIS</th>
										<th>Nama Siswa</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php
									$nip = $absen['nip'];
									$queryguru = mysqli_query ($konek, "SELECT * FROM tbl_guru WHERE nip = '$nip'");
									$guru = mysqli_fetch_array ($queryguru);
									$nis = $absen['nis'];
									$querysiswa = mysqli_query ($konek, "SELECT * FROM tbl_siswa WHERE nis = '$nis'");
									$siswa = mysqli_fetch_array ($querysiswa);
									$kd_mapel = $absen['kd_mapel'];
									$querymapel = mysqli_query ($konek, "SELECT * FROM tbl_kelmapel WHERE kd_mapel = '$kd_mapel'");
									$mapel = mysqli_fetch_array ($querymapel);
											echo "
											<input type='hidden' value = '$absen[id_absensi]' name='id_absensi'>
												<tr>
													<td>$absen[nis]</td>
													<td>$siswa[nama_siswa]</td>
													<td>
														<div class='form-group has-feedback'>
											            <select class='form-control' name='status'>
											                      <option value='Hadir'>Hadir</option>
											                      <option value='Sakit'>Sakit</option>
											                      <option value='Izin'>Izin</option>
											                      <option value='Alfa'>Alfa</option>
											            </select>
											          </div>
													</td>
												</tr>";
										}
									?>
								</tbody>
		                  	</table>
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