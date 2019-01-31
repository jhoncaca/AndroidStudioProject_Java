				<thead>
					<tr>
						<th>Kode kelas</th>
						<th>Kelas</th>
						<th>Sub Kelas</th>
                        <th>Nama guru</th>
						<th>Ubah/Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querykelas = mysqli_query ($konek, "SELECT tbl_kelas.*, tbl_guru.nama_guru FROM tbl_kelas JOIN tbl_guru ON tbl_guru.nip=tbl_kelas.nip ");
						if($querykelas == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($kelas = mysqli_fetch_array ($querykelas)){
							
							echo "
								<tr>
									<td>$kelas[kode_kelas]</td>
									<td>$kelas[kelas]</td>
									<td>$kelas[sub_kelas]</td>
									<td>$kelas[nama_guru]</td>
									<td>
										<a href='#' class='open_modal' id='$kelas[kode_kelas]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"kelas_delete.php?kode_kelas=$kelas[kode_kelas]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>