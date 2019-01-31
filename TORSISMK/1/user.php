<?php

session_start();
include "../koneksi.php";
include "auth_user.php";

?>
<!DOCTYPE html>
<html>
 <head>
    <meta charset="utf-8">
    <title>IDS Akademik</title>
	<!-- Library CSS -->
	<?php
		include "bundle_css.php";
	?>
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
              <li class="header"><h4><b><center>Menu</center></b></h4></li>
              <li class="active"><a href="index.php"><i class="fa fa-home"></i><span>Dashboard</span></a></li>
			        <li><a href="guru.php"><i class="fa fa-user"></i><span>guru</span></a></li>
			        <li><a href="siswa.php"><i class="fa fa-users"></i><span>Siswa</span></a></li>
                    <li><a href="wali.php"><i class="fa fa-users"></i><span>Wali Murid</span></a></li>
			         <li><a href="pelajaran.php"><i class="fa fa-book"></i><span>Pelajaran</span></a></li>
			        <li><a href="kelas.php"><i class="fa fa-university"></i><span>Kelas</span></a></li>
					<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
					<li><a href="ujian.php"><i class="fa fa-calendar"></i><span>Ujian</span></a></li>
					<li><a href="pengumuman.php"><i class="fa fa-calendar"></i><span>Pengumuman</span></a></li>
					<li><a href="user.php"><i class="fa fa-user-circle-o"></i><span>User</span></a></li>
			        </ul>
        </section>
        <!-- /.sidebar -->
      </aside>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            User
          </h1>
          <ol class="breadcrumb">
            <li><i class="fa fa-user-circle-o"></i> User</li>
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
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddguru" data-toggle="modal"><i class="fa fa-plus"></i> Add guru</button></a>
				<a href="#"><button class="btn btn-success" type="button" data-target="#ModalAddsiswa" data-toggle="modal"><i class="fa fa-plus"></i> Add siswa</button></a>
                  <br></br>
				  <table id="data" class="table table-bordered table-striped table-scalable">
						<?php
							include "dt_user.php";
						?>
                  </table>
                </div><!-- /.box-body -->
              </div><!-- /.box -->
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
		
		<!-- Modal Popup guru -->
		<div id="ModalAddguru" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User guru</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIP guru</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_guru.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=2 selected>guru</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>guru</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="User_guru" class="form-control">
											<?php
												$queryguru = mysqli_query($konek, "SELECT * FROM guru");
												if($queryguru == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($guru = mysqli_fetch_array($queryguru)){
													if($guru["NIP"] != $_SESSION["Username"]){
														echo "<option value='$guru[NIP]'>$guru[Nama_guru], Tambah guru untuk User dengan NIP = $guru[NIP]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Create User
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup guru -->
		<div id="ModalAddsiswa" class="modal fade" tabindex="-1" role="dialog">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<h4 class="modal-title">Tambah User siswa</h4>
						<br />
						<h6 class="modal-title">Username Dan Password = NIS siswa</h6>
					</div>
					<div class="modal-body">
						<form action="user_add_siswa.php" name="modal_popup" enctype="multipart/form-data" method="post">
							<div class="form-group">
								<label>Usergroup</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="Id_Usergroup_User" class="form-control">
											<option value=3 selected>siswa</option>
										</select>
									</div>
							</div>
							<div class="form-group">
								<label>siswa</label>
									<div class="input-group">
										<div class="input-group-addon">
											<i class="fa fa-user"></i>
										</div>
										<select name="User_siswa" class="form-control">
											<?php
												$querysiswa = mysqli_query($konek, "SELECT * FROM siswa");
												if($querysiswa == false){
													die ("Terdapat Kesalahan : ". mysqli_error($konek));
												}
												while($mhs = mysqli_fetch_array($querysiswa)){
													if($mhs["NIS"] != $_SESSION["Username"]){
														echo "<option value='$mhs[NIS]'>$mhs[Nama_siswa], Tambah siswa untuk User dengan NIS = $mhs[NIS]</option>";
													}
												}
											?>
										</select>
									</div>
							</div>
							<div class="modal-footer">
								<button class="btn btn-success" type="submit">
									Create User
								</button>
								<button type="reset" class="btn btn-danger"  data-dismiss="modal" aria-hidden="true">
									Cancel
								</button>
							</div>
						</form>
					</div>
				</div>
			</div>
		</div>
		
		<!-- Modal Popup untuk delete--> 
		<div class="modal fade" id="modal_delete">
			<div class="modal-dialog">
				<div class="modal-content" style="margin-top:100px;">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title" style="text-align:center;">Are you sure to delete this information ?</h4>
					</div>    
					<div class="modal-footer" style="margin:0px; border-top:0px; text-align:center;">
						<a href="#" class="btn btn-danger" id="delete_link">Delete</a>
						<button type="button" class="btn btn-success" data-dismiss="modal">Cancel</button>
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