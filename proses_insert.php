<?php
include "koneksi.php";
$tambah=mysqli_query($conn, "insert into biodata_tbl (id,nama,alamat) values ('','$_POST[txt_nama]','$_POST[txt_alamat]')");
if($tambah){
	header("location:tampil_data.php");
}else{
	echo "Tambah data gagal";
}
?>