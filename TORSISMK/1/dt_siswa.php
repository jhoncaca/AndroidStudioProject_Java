				<thead>
					<tr>
						<th>NIS</th>
						<th>Nama Siswa</th>
						<th>Kelas</th>
                        <th>Sub Kelas</th>
                        <th>Telpon</th>
                        <th>Alamat</th>
						<th>NIP</th>
                        <th>Tanggal Lahir</th>
                        <th>Password</th>
						<?php if ($_SESSION['akses']!='bk') {
							?>
							<th>Ubah/Hapus</th>
							<?php
						}
						?>
					</tr>
				</thead>
				<tbody>
					<?php
						$querysis = mysqli_query ($konek, "SELECT tbl_siswa.*, tbl_kelas.nip,tbl_kelas.kelas,tbl_kelas.sub_kelas FROM tbl_siswa JOIN tbl_kelas ON tbl_kelas.kode_kelas=tbl_siswa.kode_kelas");
						if($querysis == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						if ($_SESSION['akses']!='bk') {	
						while ($sis = mysqli_fetch_array ($querysis)){
							
							echo "
								<tr>
									<td>$sis[nis]</td>
									<td>$sis[nama_siswa]</td>
									<td>$sis[kelas]</td>
									<td>$sis[sub_kelas]</td>
									<td>$sis[no_telp]</td>
									<td>$sis[alamat]</td>
									<td>$sis[nip]</td>
									<td>$sis[tgl_lahir]</td>
									<td>$sis[password]</td>
										<td>
											<a href='#' class='open_modal' id='$sis[nis]'>Ubah</a> |
											<a href='#' onClick='confirm_delete(\"siswa_delete.php?nis=$sis[nis]\")'>Hapus</a>
										</td>
								</tr>";
						}
					} else{
						while ($sis = mysqli_fetch_array ($querysis)){
							
							echo "
								<tr>
									<td>$sis[nis]</td>
									<td>$sis[nama_siswa]</td>
									<td>$sis[kelas]</td>
									<td>$sis[sub_kelas]</td>
									<td>$sis[no_telp]</td>
									<td>$sis[alamat]</td>
									<td>$sis[nip]</td>
									<td>$sis[tgl_lahir]</td>
									<td>$sis[password]</td>
								</tr>";
					}
				}
					?>
				</tbody>