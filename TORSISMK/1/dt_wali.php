				<thead>
					<tr>
						<th>NIO</th>
						<th>Nama Wali Murid</th>
						<th>Alamat</th>
						<th>Telpon</th>
                        <th>Nama Siswa</th>
                        <th>Password</th>
						<th>Ubah/Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryguru = mysqli_query ($konek, "SELECT tbl_orangtua.*, tbl_siswa.nama_siswa  FROM tbl_orangtua join tbl_siswa on tbl_orangtua.nis=tbl_siswa.nis ");
						if($queryguru == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($guru = mysqli_fetch_array ($queryguru)){
							
							echo "
								<tr>
									<td>$guru[nio]</td>
									<td>$guru[nama_ortu]</td>
									<td>$guru[alamat]</td>
									<td>$guru[no_telp]</td>
									<td>$guru[nama_siswa]</td>
									<td>$guru[password]</td>
									<td>
										<a href='#' class='open_modal' id='$guru[nio]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"wali_delete.php?nio=$guru[nio]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>