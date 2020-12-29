<?php
include "koneksi.php";
echo "<a href='form_tambah.php'>Tambah Data</a> | <a href='tampil_data.php'>View Data</a> | <a href='logout.php'>Logout</a><p>";
$cek=mysqli_query($conn, "select * from biodata_tbl");
echo "<table border='1' style='border-collapse:collapse'";
echo "<tr><th>Id</th><th>Nama</th><th>Alamat</th><th>Aksi</th>";
while($data=mysqli_fetch_array($cek)){
	echo "
	<tr>
	   <td>$data[id]</td>
		<td>$data[nama]</td>
		<td>$data[alamat]</td>
		<td><a href='form_edit.php?kode=$data[id]''>Edit</a> | <a href='proses_delete.php?kode=$data[id]'>Delete</a></td>
	</tr>";
}
echo "</table>";
?>