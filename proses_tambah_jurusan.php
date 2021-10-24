<?php
if($_POST){
	$nama_jurusan=$_POST['nama_jurusan'];
	$angkatan=$_POST['angkatan'];
	if(empty($nama_jurusan)){
		echo "<script>arlert('Nama Jurusan tidak boleh kosong');location.href='tambah_kelas.php';</script";

	} elseif (empty($angkatan)) {
		echo "<script>arlert('Angkatan tidak boleh kosong');location.href='tambah_kelas.php';</script>";
	} else {
		include "koneksi.php";
		$insert=mysql_query($conn,"insert into jurusan (nama_jurusan, angkatan) value('".$nama_jurusan."','".$angkatan."')");
		if($insert){
			echo "<script>arlert('Sukses menambahkan data jurusan');location.href='tambah_kelas.php';</script>";
		} else {
			echo "<script>arlert('Gagal menambahkan data jurusan');location.href='tambah_kelas.php';</script>";
		}		
	}
}
?>