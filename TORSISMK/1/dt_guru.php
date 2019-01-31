				<thead>
					<tr>
						<th>NIP</th>
						<th>Nama Guru</th>
						<th>Alamat</th>
						<th>Telpon</th>
                        <th>Password</th>
						<th>Ubah/Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$queryguru = mysqli_query ($konek, "SELECT nip, nama_guru, no_telp, alamat, password FROM tbl_guru");
						if($queryguru == false){
							die ("Terjadi Kesalahan : ". mysqli_error($konek));
						}
						while ($guru = mysqli_fetch_array ($queryguru)){
							
							echo "
								<tr>
									<td>$guru[nip]</td>
									<td>$guru[nama_guru]</td>
									<td>$guru[alamat]</td>
									<td>$guru[no_telp]</td>
									<td>$guru[password]</td>
									<td>
										<a href='#' class='open_modal' id='$guru[nip]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"guru_delete.php?nip=$guru[nip]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>