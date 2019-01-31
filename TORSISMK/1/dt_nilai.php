				<thead>
					<tr>
						<th>Kode Nilai</th>
						<th>Nama Guru</th>
						<th>Nama Siswa</th>
                        <th>Nama Pelajaran</th>
                        <th>KKM</th>
                        <th>Nilai Harian</th>
						<th>Nilai Tugas</th>
						<th>Nilai UTS</th>
						<th>Nilai UAS</th>
                        <th>Nilai Pengetahuan</th>
                        <th>Nilai Keterampilan</th>
                        <th>Nilai Akhir</th>
                        <th>Kompetensi</th>
                        <?php if ($_SESSION["akses"] == 'guru' || $_SESSION["akses"] == 'admin') { ?>
						<th>Ubah/Hapus</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php
						if ($_SESSION["akses"] == 'guru' || $_SESSION["akses"] == 'admin') {
							$querynilai = mysqli_query ($konek, "SELECT * FROM tbl_detail_nilai");
							if($querynilai == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($nilai = mysqli_fetch_array ($querynilai)){
							$kd_guru=$nilai['nip'];
							$queryguru = mysqli_query ($konek, "SELECT * FROM tbl_guru WHERE nip='$kd_guru'");
							$guru = mysqli_fetch_array ($queryguru);

							$kd_siswa=$nilai['nis'];
							$querysiswa = mysqli_query ($konek, "SELECT * FROM tbl_siswa WHERE nis='$kd_siswa'");
							$siswa = mysqli_fetch_array ($querysiswa);

							$kd_mapel=$nilai['kode_mapel'];
							$querymapel = mysqli_query ($konek, "SELECT * FROM tbl_mapel WHERE kode_mapel='$kd_mapel'");
							$mapel = mysqli_fetch_array ($querymapel);

							echo "
								<tr>
									<td>$nilai[id_nilai]</td>
									<td>$guru[nama_guru]</td>
									<td>$siswa[nama_siswa]</td>
									<td>$mapel[mapel]</td>
									<td>$nilai[kkm]</td>
									<td>$nilai[nilai_uh]</td>
									<td>$nilai[nilai_tugas]</td>
									<td>$nilai[nilai_uts]</td>
									<td>$nilai[nilai_uas]</td>
									<td>$nilai[nilai_pengetahuan]</td>
									<td>$nilai[nilai_keterampilan]</td>
									<td>$nilai[nilai_akhir]</td>
									<td>$nilai[kompetensi]</td>
									<td>
										<a href='#' class='open_modal' id='$nilai[id_nilai]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"nilai_delete.php?kd_nilai=$nilai[id_nilai]\")'>Hapus</a>
									</td>
								</tr>";
						}
						}
						if ($_SESSION["akses"] == 'bk') {
							$querynilai = mysqli_query ($konek, "SELECT * FROM tbl_detail_nilai order by nilai_akhir asc");
							if($querynilai == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
							
						while ($nilai = mysqli_fetch_array ($querynilai)){
							$kd_guru=$nilai['nip'];
							$queryguru = mysqli_query ($konek, "SELECT * FROM tbl_guru WHERE nip='$kd_guru'");
							$guru = mysqli_fetch_array ($queryguru);

							$kd_siswa=$nilai['nis'];
							$querysiswa = mysqli_query ($konek, "SELECT * FROM tbl_siswa WHERE nis='$kd_siswa'");
							$siswa = mysqli_fetch_array ($querysiswa);

							$kd_mapel=$nilai['kode_mapel'];
							$querymapel = mysqli_query ($konek, "SELECT * FROM tbl_mapel WHERE kode_mapel='$kd_mapel'");
							$mapel = mysqli_fetch_array ($querymapel);

							echo "
								<tr>
									<td>$nilai[id_nilai]</td>
									<td>$guru[nama_guru]</td>
									<td>$siswa[nama_siswa]</td>
									<td>$mapel[mapel]</td>
									<td>$nilai[kkm]</td>
									<td>$nilai[nilai_uh]</td>
									<td>$nilai[nilai_tugas]</td>
									<td>$nilai[nilai_uts]</td>
									<td>$nilai[nilai_uas]</td>
									<td>$nilai[nilai_pengetahuan]</td>
									<td>$nilai[nilai_keterampilan]</td>
									<td>$nilai[nilai_akhir]</td>
									<td>$nilai[kompetensi]</td>
								</tr>";
						}
						}
					?>
				</tbody>