<?php
include "koneksi.php";
echo "<a href='form_tambah.php'>Tambah Data</a> | <a href='tampil_data.php'>View Data</a> | <a href='logout.php'>Logout</a><p>";

$ambil=$_GET["kode"];
$cek=mysqli_query($conn, "select * from biodata_tbl where id='$ambil'");
$data=mysqli_fetch_array($cek);
?>
<html>
<head>
<title>CRUD</title>
</head>
<body>
<form method="post" action="proses_edit.php">
<table style="border-collapse:collapse">
  <tr>
  	<td>Nama</td>
 	 <td><input type="hidden" name="txt_id" value="<?php echo $data['id']; ?>"/>
     <input type="text" name="txt_nama" value="<?php echo $data['nama']; ?>"/>
     </td>
  </tr>
  <tr>
  	<td>Alamat</td>
    <td><textarea name="txt_alamat" cols="30" rows="3"><?php echo $data['alamat']; ?></textarea></td>
  </tr>
  <tr>
  	<td><input type="submit" name="btn_press" value="Update"></td>
  </tr>
</table>
</form>
</body>
</html>