				<thead>
					<tr>
						<th>Kelas</th>
						<th>Sub Kelas</th>
						<th>Kode Mapel</th>
						<th>Tanggal Ujian</th>
                        <th>Jam Mulai</th>
						<th>Jam Selesai</th>
                        <th>Keterangan</th>
						<th>Ubah/Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php 
						$queryjadwal = mysqli_query ($konek, "SELECT tbl_detail_ujian.*, tbl_mapel.mapel,tbl_kelas.kelas,tbl_kelas.sub_kelas FROM tbl_detail_ujian JOIN tbl_mapel JOIN tbl_kelas ON tbl_mapel.kode_mapel=tbl_detail_ujian.kode_mapel and tbl_detail_ujian.kode_kelas=tbl_kelas.kode_kelas ");
						if($queryjadwal == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($jadwal = mysqli_fetch_array ($queryjadwal)){
							
							echo "
								<tr>
									<td>$jadwal[kelas]</td>
									<td>$jadwal[sub_kelas]</td>
									<td>$jadwal[mapel]</td>
									<td>$jadwal[tgl_ujian]</td>
									<td>$jadwal[jam_mulai]</td>
									<td>$jadwal[jam_selesai]</td>
									<td>$jadwal[ket]</td>
									<td>
										<a href='#' class='open_modal' id='$jadwal[id_ujian]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"ujian_delete.php?id_ujian=$jadwal[id_ujian]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>