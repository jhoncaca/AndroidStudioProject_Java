				<thead>
					<tr>
						<th>Kode pelajaran</th>
						<th>Nama pelajaran</th>
                        
						<th>Ubah/Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querypelajaran = mysqli_query ($konek, "SELECT * FROM tbl_kelmapel");
						if($querypelajaran == false){
							die ("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						while($pelajaran = mysqli_fetch_array($querypelajaran)){
							echo "<tr>
									<td>$pelajaran[kd_mapel]</td>
									<td>$pelajaran[mapel]</td>
									<td>
										<a href='#' class='open_modal' id='$pelajaran[kd_mapel]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"mapel_delete.php?kode_mapel=$pelajaran[kd_mapel]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>