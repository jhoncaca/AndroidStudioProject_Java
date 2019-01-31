				<thead>
					<tr>
						<th>Nama Guru</th>
						<th>Nama Siswa</th>
						<th>Nama Pelajaran</th>
						<th>Status</th>
                        <th>Tanggal Absensi</th>
						<th>Ubah/Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryabsen = mysqli_query ($konek, "SELECT * FROM tbl_absensi");
						if($queryabsen == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($absen = mysqli_fetch_array ($queryabsen)){
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
								<tr>
									<td>$guru[nama_guru]</td>
									<td>$siswa[nama_siswa]</td>
									<td>$mapel[mapel]</td>
									<td>$absen[status]</td>
									<td>$absen[tgl_absensi]</td>
									<td>
										<a href='#' class='open_modal' id='$absen[id_absensi]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"absensi_delete.php?id=$absen[id_absensi]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>