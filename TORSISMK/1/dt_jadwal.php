				<thead>
					<tr>
						<th>Guru</th>
						<th>Siswa</th>
						<th>Kelas</th>
						<th>Sub Kelas</th>
						<th>Mapel</th>
						<th>Hari</th>
                        <th>Jam Mulai</th>
						<th>Jam Selesai</th>
						<th>Ubah/Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$queryjadwal = mysqli_query ($konek, "SELECT tbl_detail_jadwal.*, tbl_guru.nama_guru,tbl_kelas.kelas,tbl_kelas.sub_kelas,tbl_mapel.mapel,tbl_siswa.nama_siswa, tbl_detail_jadwal.jam_mulai, tbl_detail_jadwal.jam_selesai FROM tbl_detail_jadwal JOIN tbl_guru ON tbl_guru.nip=tbl_detail_jadwal.nip JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_detail_jadwal.kode_kelas JOIN tbl_mapel ON tbl_mapel.kode_mapel=tbl_detail_jadwal.kode_mapel join tbl_siswa on tbl_siswa.nis=tbl_detail_jadwal.nis ");
						if($queryjadwal == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($jadwal = mysqli_fetch_array ($queryjadwal)){
							
							echo "
								<tr>
									<td>$jadwal[nama_guru]</td>
									<td>$jadwal[nama_siswa]</td>
									<td>$jadwal[kelas]</td>
									<td>$jadwal[sub_kelas]</td>
									<td>$jadwal[mapel]</td>
									<td>$jadwal[hari]</td>
									<td>$jadwal[jam_mulai]</td>
									<td>$jadwal[jam_selesai]</td>
									<td>
										<a href='#' class='open_modal' id='$jadwal[id_jadwal]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"jadwal_delete.php?id_jadwal=$jadwal[id_jadwal]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>