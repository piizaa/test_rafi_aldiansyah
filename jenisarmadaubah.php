<?php 
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ubah Jenis Armada</title>
</head>
<body>
	<h2>ubah jenis Armada</h2>	 
	<?php 
	$id = $_GET['id'];
	$query = mysqli_query($koneksi,"SELECT * from jenisarmada where id='$id'");
				while ($data = mysqli_fetch_array($query)) {
				$id = $data['id'];
				$nama = $data['nama'];
				$merk = $data['merk'];	
				 }
	 ?>
	<form method="POST" action="jenisarmadasimpanubah.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		<label>Nama</label><br>
		<input type="text" name="nama" value="<?php echo $nama; ?>">
		<br><br>
		<label>Merk</label><br>
		<input type="text" name="merk" value="<?php echo $merk; ?>">
		<br><br>
		<button type="submit">SIMPAN</button>
	</form>
</body>
</html>