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
  </head>
  <body class="hold-transition skin-red sidebar-mini">
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
              <li class="header"><h4><b><center>Menu</center></b></h4></li>
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
          Data Nilai
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user"></i> Nilai</li>
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
                	<?php
			if ($_SESSION["akses"] == 'guru' || $_SESSION["akses"] == 'admin') {
			?> 	
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAdd" data-toggle="modal"><i class="fa fa-plus"></i> Tambah Data</button></a>
			<?php } ?>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_nilai.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup guru -->
		<div id="ModalAdd" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah Nilai</h4>
					</div>
					<div class="modal-body">
						<form action="nilai_add.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Kode Nilai</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<input name="kd_nilai" type="text" class="form-control" placeholder="Kode Nilai"/>
									</div>
							</div>
							<div class="form-group">
								<label>NIP</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-id-card"></i>
										</div>
										<select class="form-control" name="nip">
											<option value="">Pilih Guru</option>
											<?php
											$query = 'SELECT * FROM tbl_guru';
											$sql = mysqli_query($konek,$query);
											while ($data = mysqli_fetch_array($sql)){
												?>
												<option value="<?php echo $data['nip'];?>"><?php echo $data['nama_guru'];?></option>
												<?php
											}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>Nama Siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select class="form-control" name="nis">
											<option value="">Pilih Siswa</option>
											<?php
											$query = 'SELECT * FROM tbl_siswa';
											$sql = mysqli_query($konek,$query);
											while ($data = mysqli_fetch_array($sql)){
												?>
												<option value="<?php echo $data['nis'];?>"><?php echo $data['nama_siswa'];?></option>
												<?php
											}
											?>
										</select>
								</div>
							</div>
							<div class="form-group">
								<label>Nama Mata Pelajaran</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-phone"></i>
										</div>
										<select class="form-control" name="kode_mapel">
											<option value="">Pilih Mapel</option>
											<?php
											$query = 'SELECT * FROM tbl_mapel';
											$sql = mysqli_query($konek,$query);
											while ($data = mysqli_fetch_array($sql)){
												?>
												<option value="<?php echo $data['kode_mapel'];?>"><?php echo $data['mapel'];?></option>
												<?php
											}
											?>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>KKM</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-flag"></i>
										</div>
										<input name="kkm" type="text" class="form-control" placeholder="KKM"/>
									</div>
							</div>
                            <div class="form-group">
								<label>Nilai Ulangan Harian</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
                                        <input name="nilai_uh" type="text" class="form-control" placeholder="Nilai Ulangan Harian"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai Tugas</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
                                        <input name="nilai_tgs" type="text" class="form-control" placeholder="Nilai Tugas"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai UTS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
                                        <input name="nilai_uts" type="text" class="form-control" placeholder="Nilai UTS"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai UAS</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
                                        <input name="nilai_uas" type="text" class="form-control" placeholder="Nilai UAS"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai Pengetahuan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
                                        <input name="nilai_p" type="text" class="form-control" placeholder="Nilai Pengetahuan"/>
									</div>
							</div>
							<div class="form-group">
								<label>Nilai Keterampilan</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user-o"></i>
										</div>
                                        <input name="nilai_k" type="text" class="form-control" placeholder="Nilai Keterampilan"/>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Tambah
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Batal
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup nilai Edit -->
		<div id="ModalEditnilai" class="modal fade" tabindex="-1" role="dialog"></div>
		
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
