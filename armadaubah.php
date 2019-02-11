<?php 
include 'koneksi.php';
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>ubah Kode Armada</title>
</head>
<body>
	<h2>ubah kode Armada</h2>	 
	<?php 
	$id = $_GET['id'];
	$query = mysqli_query($koneksi,"SELECT * from armada where id='$id'");
				while ($data = mysqli_fetch_array($query)) {
				$id = $data['id'];
				$kode = $data['kode'];	
				 }
	 ?>
	<form method="POST" action="armadasimpanubah.php">
		<input type="hidden" name="id" value="<?php echo $id; ?>">
		
		<label>Kode</label><br>
		<input type="text" name="kode" value="<?php echo $kode; ?>">
		<br><br>
		<button type="submit">SIMPAN</button>
	</form>
</body>
</html>