<?php
	if($_SESSION["akses"]=='admin'){
?>
		<li><a href="guru.php"><i class="fa fa-user"></i><span>Guru</span></a></li>
		<li><a href="siswa.php"><i class="fa fa-users"></i><span>Siswa</span></a></li>
		<li><a href="wali.php"><i class="fa fa-users"></i><span>Wali Murid</span></a></li>
		<li class="treeview">
          <a href="#">
            <i class="fa fa-th"></i>
            <span>Data</span>
            <span class="pull-right-container">
          </a>
          <ul class="treeview-menu">
            <li><a href="mapel.php"><i class="fa fa-circle-o"></i> Data Pelajaran</a></li>
            <li><a href="pelajaran.php"><i class="fa fa-circle-o"></i> Data Kompetensi Dasar</a></li>
          </ul>
        </li>
		<li><a href="nilai.php"><i class="fa fa-book"></i><span>Nilai</span></a></li>
		<li><a href="kelas.php"><i class="fa fa-university"></i><span>Kelas</span></a></li>
		<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
		<li><a href="ujian.php"><i class="fa fa-calendar"></i><span>Ujian</span></a></li>
		<li><a href="absensi.php"><i class="fa fa-calendar"></i><span>Absensi</span></a></li>
		<li><a href="pengumuman.php"><i class="fa fa-calendar"></i><span>Pengumuman</span></a></li>
<?php
	}
	elseif ($_SESSION["akses"]=='guru') {
?>
		<li><a href="nilai.php"><i class="fa fa-book"></i><span>Nilai</span></a></li>
		<li><a href="jadwal.php"><i class="fa fa-calendar"></i><span>Jadwal</span></a></li>
		<li><a href="absensi.php"><i class="fa fa-calendar"></i><span>Absensi</span></a></li>
		<li><a href="pengumuman.php"><i class="fa fa-calendar"></i><span>Pengumuman</span></a></li>
<?php
	}
	elseif ($_SESSION["akses"]=='walikelas') {
?>
		<li><a href="siswa.php"><i class="fa fa-users"></i><span>Siswa</span></a></li>
		<li><a href="wali.php"><i class="fa fa-users"></i><span>Wali Murid</span></a></li>
		<li><a href="pelajaran.php"><i class="fa fa-book"></i><span>Pelajaran</span></a></li>
		<li><a href="absensi.php"><i class="fa fa-calendar"></i><span>Absensi</span></a></li>
		<li><a href="pengumuman.php"><i class="fa fa-calendar"></i><span>Pengumuman</span></a></li>
<?php
	}
	elseif ($_SESSION["akses"]=='bk') {
?>
		<li><a href="nilai.php"><i class="fa fa-book"></i><span>Nilai</span></a></li>
		<li><a href="siswa.php"><i class="fa fa-users"></i><span>Siswa</span></a></li>
		<li><a href="pengumuman.php"><i class="fa fa-calendar"></i><span>Pengumuman</span></a></li>
<?php
	}
?>