<?php
include "koneksi.php";
$tangkap=$_GET["kode"];
$del=mysqli_query($conn, "delete from biodata_tbl where id='$tangkap'");
if($del){
	header("location:tampil_data.php");
}else{
	echo "Gagal";
}
?>