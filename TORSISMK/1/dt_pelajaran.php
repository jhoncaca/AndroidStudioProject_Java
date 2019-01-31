				<thead>
					<tr>
						<th>Kode Kompetensi Dasar</th>
						<th>Kompetensi Dasar</th>
                        
						<th>Ubah/Hapus</th>
					</tr>
				</thead>
				<tbody>
					<?php
						$querypelajaran = mysqli_query ($konek, "SELECT * FROM tbl_mapel");
						if($querypelajaran == false){
							die ("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						while($pelajaran = mysqli_fetch_array($querypelajaran)){
							echo "<tr>
									<td>$pelajaran[kode_mapel]</td>
									<td>$pelajaran[mapel]</td>
									<td>
										<a href='#' class='open_modal' id='$pelajaran[id_mapel]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"pelajaran_delete.php?kode_mapel=$pelajaran[id_mapel]\")'>Hapus</a>
									</td>
								</tr>";
						}
					?>
				</tbody>