<?php
include ("koneksi.php");
$cek_usr=$_POST["txt_uname"];
$cek_pass=md5($_POST["txt_pass"]);
$cek_data=mysqli_query($conn, "SELECT * FROM login_tbl WHERE uname='$cek_usr' AND passw='$cek_pass'");
$jml_data=mysqli_num_rows($cek_data);
if($jml_data>0){
	header("location:form_tambah.php");
}else{
	echo "Login gagal....!";
	echo "<a href='form_login.php'>Login lagi</a>";
}
?>