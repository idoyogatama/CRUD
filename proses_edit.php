<?php
include "koneksi.php";
$ubah=mysqli_query($conn, "UPDATE biodata_tbl SET nama='$_POST[txt_nama]', alamat='$_POST[txt_alamat]' WHERE id='$_POST[txt_id]'");
if($ubah){
	header("location:tampil_data.php");
}else{
	echo "Ubah data gagal";
}
?>