<html>
<head>
<title>CRUD</title>
</head>
<body>
<a href='form_tambah.php'>Tambah Data</a> | <a href='tampil_data.php'>View Data</a> | <a href='logout.php'>Logout</a><p>
<form method="post" action="proses_insert.php">
<table style="border-collapse:collapse">
  <tr>
  	<td>Nama</td>
 	 <td><input type="text" name="txt_nama"/></td>
  </tr>
  <tr>
  	<td>Alamat</td>
    <td><textarea name="txt_alamat" cols="30" rows="3"></textarea></td>
  </tr>
  <tr>
  	<td><input type="submit" name="btn_press"></td>
  </tr>
</table>
</form>
</body>
</html>