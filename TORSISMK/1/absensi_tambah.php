<?php

session_start();
include "../koneksi.php";
include "auth_user.php";
?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>Sistem Pemantau Kemajuan Siswa</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>

	<script src="../aset/plugins/daterangepicker/moment.min.js"></script>
	<script src="../aset/plugins/daterangepicker/daterangepicker.js"></script>
	<!-- page script -->
    <script>
      $(function () {	
		// Daterange Picker
		  $('#Tanggal_Lahir2').daterangepicker({
			  singleDatePicker: true,
			  showDropdowns: true,
			  format: 'YYYY-MM-DD'
		  });
      });
    </script>
  </head>
  <body class="hold-transition skin-blue sidebar-mini">
    <div class="wrapper">
      <?php
        include 'content_header.php';
       ?>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <p></p>
            </div>
          </div><!-- sidebar menu: : style can be found in sidebar.less -->
          <ul class="sidebar-menu">
              <li class="header"><h4><b><center>Menu Panel</center></b></h4></li>
              <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
              <?php
                include 'menu.php';
              ?>
		  </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
          Data Absensi
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i> Absensi</li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
                <div class="box-header">

                </div><!-- /.box-header -->
                <div class="box-body">
                <form action="absensi_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<table class="table table-bordered table-striped table-scalable">
								<thead>
									<tr>
										<th>NIS</th>
										<th>Nama Siswa</th>
										<th>Status</th>
									</tr>
								</thead>
								<tbody>
									<?php

									$kd	= $_GET["kd_kelas"];

									$queryabsensi = mysqli_query($konek, "SELECT * FROM tbl_siswa WHERE kode_kelas='$kd'");
									if($queryabsensi == false){
										die ("Terjadi Kesalahan : ". mysqli_error($konek));
									}
									while($absen = mysqli_fetch_array($queryabsensi)){
									?>
											<input type='hidden' value = '<?php echo $absen['nis']; ?>' name='nis[]'>
												<tr>
													<td><?php echo $absen['nis'];?></td>
													<td><?php echo $absen['nama_siswa'];?></td>
													<td>
														<div class='form-group has-feedback'>
											            <select class='form-control' name='status[]'>
											                      <option value='Hadir'>Hadir</option>
											                      <option value='Sakit'>Sakit</option>
											                      <option value='Izin'>Izin</option>
											                      <option value='Alfa'>Alfa</option>
											            </select>
											          </div>
													</td>
												</tr>
										<?php
										}
									?>
								</tbody>
		                  	</table>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Simpan	
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup absensi kelas -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Kelas Absensi</h4>
					</div>
					<div class="modal-body">
							<div class="form-group">
								<label>Kelas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<select class="form-control" id="kode_kelas" focus>
											<?php
											$query = 'SELECT * FROM tbl_kelas';
											$sql = mysqli_query($konek,$query);
											while ($data = mysqli_fetch_array($sql)){
												?>
												<option value="<?php echo $data['kode_kelas'];?>"><?php echo $data['kelas']." - ".$data['sub_kelas'];?></option>
												<?php
											}
											?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<a href='#' class='carisiswa'>
									<button class="btn btn-success" type="button" data-dismiss="modal" aria-hidden="true">
										Cari
									</button>
								</a>
							</div>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup absensi Edit -->
		<div id="ModalEditabsensi" class="modal fade" tabindex="-1" role="dialog"></div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Yakin akan menghapus informasi ini ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Hapus</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Batal</button>
					</div>
				</div>
			</div>
		</div>
		
    </div><!-- /.content-wrapper -->
    <?php
		include	"content_footer.php";
	?>
    </div><!-- ./wrapper -->
	<!-- Library Scripts -->
	<?php
		include "bundle_script.php";
	?>
  </body>
</html>

<!-- jQuery 2.1.4 -->
    <script src="../aset/plugins/jQuery/jQuery-2.1.4.min.js"></script>
    <!-- Bootstrap 3.3.5 -->
    <script src="../aset/bootstrap/js/bootstrap.min.js"></script>
    <!-- DataTables -->
    <script src="../aset/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="../aset/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <!-- SlimScroll -->
    <script src="../aset/plugins/slimScroll/jquery.slimscroll.min.js"></script>

      <script>
      $(function () {
		
		  // Data Table
        $("#data").dataTable({
			scrollX: true
		});		
      });
    </script>