				<thead>
					<tr>
						<th>Judul</th>
						<th>Isi Pengumuman</th>
                        <th>tanggal</th>
                        <?php if ($_SESSION['akses']!='bk') {
							?>
						<th>Ubah/Hapus</th>
						<?php } ?>
					</tr>
				</thead>
				<tbody>
					<?php
						$querypelajaran = mysqli_query ($konek, "SELECT * FROM tbl_pengumuman");
						if($querypelajaran == false){
							die ("Terdapat Kesalahan : ". mysqli_error($konek));
						}
						if ($_SESSION['akses']!='bk') {
						while($pelajaran = mysqli_fetch_array($querypelajaran)){
							echo "<tr>
									<td>$pelajaran[judul]</td>
									<td>$pelajaran[detail]</td>
									<td>$pelajaran[tgl]</td>
									<td>
										<a href='#' class='open_modal' id='$pelajaran[id_p]'>Ubah</a> |
										<a href='#' onClick='confirm_delete(\"pengumuman_delete.php?id_p=$pelajaran[id_p]\")'>Hapus</a>
									</td>
								</tr>";
						}
					} else{
						while($pelajaran = mysqli_fetch_array($querypelajaran)){
							echo "<tr>
									<td>$pelajaran[judul]</td>
									<td>$pelajaran[detail]</td>
									<td>$pelajaran[tgl]</td>
								</tr>";
						}
					}
					?>
				</tbody>