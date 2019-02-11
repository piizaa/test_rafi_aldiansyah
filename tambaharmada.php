<?php 
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Tambah Armada</title>
</head>
<body>
	<h2>Tambah Armada</h2>	 
	<form method="POST" action="armadasimpan.php">
		<label>Jenis Armada ID</label><br>
		
		<select name="jenis_armada_id">
			<?php 
				$query = mysqli_query($koneksi,'SELECT * from jenisarmada');
				while ($data = mysqli_fetch_array($query)) {
					
				 ?>
			<option value="<?php echo $data['id']; ?>"><?php echo $data['nama']; ?> - <?php echo $data['id']; ?></option>
			<?php } ?>
		</select>
	
		<br><br>
		<label>Kode</label><br>
		<input type="text" name="kode">
		<br><br>
		<button type="submit">SIMPAN</button>
	</form>
</body>
</html>